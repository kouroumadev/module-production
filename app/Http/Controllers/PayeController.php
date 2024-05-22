<?php

namespace App\Http\Controllers;

use App\Models\Echeance;
use App\Models\EtatRetraite;
use App\Models\EtatSuspendu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AppHelper;
use App\Imports\EtatRetraiteImport;
use App\Models\EtatDeces;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use NumberFormatter;

class PayeController extends Controller
{
    public function index() {
        $data = Echeance::all();
        // foreach ($data as $user) {
        //     $user->example = '<a href="/user/' . $user->id . '"> Traitement <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
        // }
        $mois = DB::table('mois')->get();

        return view('paye.index', compact('data', 'mois'));
    }

    public function test()
    {
        $data = Echeance::all();
        foreach ($data as $user) {
            $user->example = '<a href="/user/' . $user->id . '"> Traitement <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
            $user->created_at = AppHelper::getDateFormat($user->created_at);
            $user->created_by = AppHelper::getUserName($user->created_by);
        }
        return response()->json($data);
    }
    public function retraiteIndex(int $id) {
        // dd($request->all());

        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // $assignations = $data->distinct()->get(['assignation']);

        // $echeances = Echeance::where('type','retraite')->first()->retraites->paginate(10);
         $echeance = Echeance::find($id)->first();
         $data = $echeance->retraites;
        // $echeance = Echeance::all();
        // foreach ($echeance as $user) {
        //     $user->example = '<a href="/user/' . AppHelper::getDateFormat($user->created_at) . '">' . $user->mois . '</a>';
        // }

        // $assignation = $data->distinct()->get(['assignation']);

        // dd($data);
        return view('paye.retraite.index', compact('assignations','echeance','data'));
    }
    public function retraiteEdit(int $id) {
        // dd($id);

        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // $assignations = $data->distinct()->get(['assignation']);

        // $echeances = Echeance::where('type','retraite')->first()->retraites->paginate(10);

         $retraite = EtatRetraite::find($id);
         $echeance =  $retraite->echeance;

        // dd($retraite->suspendus);


        return view('paye.retraite.edit', compact('assignations','echeance','retraite'));
    }
    public function retraiteSuspension(int $id) {

         $retraite = EtatRetraite::find($id);

         $susp = new EtatSuspendu();
         $susp->etat_retraite_id = $retraite->id;
         $susp->created_by = Auth::user()->id;
         $susp->save();

         $retraite->update([
            'est_suspendu' => '1'
         ]);

         Alert::success('Employer suspendu avec succès!', '');
         return redirect(route('paye.suspension'))->with('yes','Enregistrer avec succes');
    }
    public function retraiteDeces(Request $request) {

         $retraite = EtatRetraite::find($request->retraite_id);
         $deces = new EtatDeces();
         $deces->etat_retraite_id = $retraite->id;
         $deces->date_deces = $request->date_deces;
         $deces->created_by = Auth::user()->id;
         $deces->save();

         $retraite->update([
            'est_decede' => '1'
         ]);

         Alert::success('Décès confirmé avec succès!', '');
         return redirect(route('paye.deces'));

    }
    public function retraiteDecesUpdate(int $id) {

         $deces = EtatDeces::find($id);

         $echeance_id = $deces->retraite->echeance->id;
        //  dd($echeance_id);

         $deces->retraite->update([
            'est_decede' => '0'
         ]);

         $deces->delete();

         Alert::success('Décès annulé avec succès!', '');
         return redirect(route('payeRetraite.index', $echeance_id));

    }
    public function retraiteSuspensionUpdate(int $id) {

         $suspendu = EtatSuspendu::find($id);

         $echeance_id = $suspendu->retraite->echeance->id;
        //  dd($echeance_id);

         $suspendu->retraite->update([
            'est_suspendu' => '0'
         ]);

         $suspendu->delete();

         Alert::success('Suspension annulé avec succès!', '');
         return redirect(route('payeRetraite.index', $echeance_id));

    }
    public function etatPayementPdf() {
        $digit = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
        $retraites = EtatRetraite::all();
        $tot_montant_trim_reval = 0;
        $tot_montant_mens_reval = 0;
        $tot_montant_arriere = 0;
        $tot_montant_a_payer = 0;
        $tot_montant_avance = 0;
        $tot_pour = 0;
        foreach($retraites as $r){
            $tot_montant_trim_reval += (int)$r->montant_trim_reval;
            $tot_montant_mens_reval += (int)$r->montant_mens_reval;
            $tot_montant_arriere += (int)$r->montant_arriere;
            $tot_montant_a_payer += (int)$r->montant_a_payer;
            $tot_montant_avance += (int)$r->montant_avance;
            $tot_pour += (int)$r->remb_pour_nb_periode;
        }
        // dd($tot_montant_trim_reval);
        $data = [
            'data' => $retraites->toArray(),
            'tot_montant_trim_reval' => AppHelper::getMoneyFormat($tot_montant_trim_reval),
            'tot_montant_mens_reval' => AppHelper::getMoneyFormat($tot_montant_mens_reval),
            'tot_montant_arriere' => AppHelper::getMoneyFormat($tot_montant_arriere),
            'tot_montant_a_payer' => AppHelper::getMoneyFormat($tot_montant_a_payer),
            'tot_montant_avance' => AppHelper::getMoneyFormat($tot_montant_avance),
            'tot_pour' => AppHelper::getMoneyFormat($tot_pour),
            'money' => $digit->format($tot_montant_a_payer),
            'date' => date('m/d/Y'),

        ];

        // dd($data);
        //
        // dd($digit->format(13892738));

        // $pdf = app('dompdf.wrapper');
        // $pdf->getDomPDF()->set_option("enable_php", true);

        $pdf = PDF::loadView('paye.retraite.pdf.test-pdf',$data);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('fetat-Payement.pdf');


    }



    // app/Http/Controllers/ProductController.php
    public function retraiteFilter(Request $request)
    {
        // dd(date('Y-m-01 00:00:00'));


        // dd($firstDayOfMonth);


        $data = Echeance::find($request->echeance_id)->first()->retraites;
        // dd($data);

        foreach($data as $d) {
            if($d->est_suspendu == "1")
                $d->est_suspendu = "OUI";
            else
                $d->est_suspendu = "NON";

            if($d->est_decede == "1")
                $d->est_decede = "OUI";
            else
                $d->est_decede = "NON";


            // $d->date_jouis = AppHelper::getDateFormat($d->date_jouis);
            $d->url = route('payeRetraite.edit', $d->id);
            // $d->updated_at = AppHelper::getDateFormat($d->updated_at);
            $d->montant_a_payer = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_a_payer) .' GNF</span>';
            $d->montant_arriere = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_arriere) .' GNF</span>';
            $d->montant_avance = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_avance) .' GNF</span>';
            $d->montant_comp = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_comp) .' GNF</span>';
            $d->montant_comp_plus = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_comp_plus) .' GNF</span>';
            $d->montant_trim = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_trim) .' GNF</span>';
            $d->montant_trim_reval = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_trim_reval) .' GNF</span>';
            $d->montant_mens_reval = '<span class="text-nowrap">'. AppHelper::getMoneyFormat($d->montant_mens_reval) .' GNF</span>';

        }
        //    dd($data);
        if(!$request->has('typeRadio')){
            $data = $data->where('type','01-');
            // dd($data);
        } else {
            $ass = $request->assignation;
            $ass1 = $request->assignation1;
            $etat = $request->etatRadio;
            $firstDayOfMonth = date('Y-m-01 00:00:00');

            $data = $data->where('type',$request->typeRadio)
                        ->when($etat && $etat == 'all', function ($query) {
                            return $query;
                        })
                        ->when($etat && $etat == 'old', function ($query) use ($firstDayOfMonth) {
                                // dd($query->where('created_at', '>', $firstDayOfMonth)); #2024-05-01 00:00:00
                            return $query->where('created_at', '<',  $firstDayOfMonth);
                        })
                        ->when($etat && $etat == 'new', function ($query) use ($firstDayOfMonth) {
                            return $query->where('created_at', '>=',  $firstDayOfMonth);
                        })
                        ->when($ass, function ($query,  $ass) {
                            return $query->where('assignation',  $ass);
                        })
                        ->when($ass1, function ($query,  $ass1) {
                            return $query->where('assignation1',  $ass1);
                        });

        }

        return response()->json($data);

    }
    public function getAll()
    {
        $data = Echeance::where('type','retraite')->first()->retraites;
        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }
    public function retraiteExcel(int $id)
    {
        // $echeance = Echeance::find($id)->first();
        $echeance = Echeance::find($id);
       return view('paye.retraite.create', compact('echeance'));
    }
    public function retraitePreview(Request $request)
    {
        $file = $request->file('file');
        if(!is_file($file))
        {
            Alert::error('Type de fichier incorrect!', '');
            return redirect()->back();
        }

        // dd($file);
        // $echeance = Echeance::find($request->echeance_id)->first();
        $echeance = Echeance::find($request->echeance_id); #10718


        $data = Excel::toArray(new EtatRetraiteImport($request->echeance_id), $file);
        $final = array_slice($data[0], 0, 1000);

        // dd($final);
        $data = $final;


        return view('paye.retraite.create', compact('echeance','data'));
    }
    public function retraiteStoreAll(Request $request)
    {
        $data = unserialize($request->data);
        // dd($request->all());
        // dd($data);

        foreach($data as $d) {
            // dd(Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($d['date_de_jouissanc'])));
            $retraite = new EtatRetraite();

            $retraite->echeance_id = $request->echeance_id;
            $retraite->num_pension = trim($d['n_de_pension']);
            $retraite->nom = trim($d['noms']);
            $retraite->prenom = trim($d['prenoms']);
            $retraite->type = trim($d['type']);
            // $retraite->date_naiss = trim($d['date_de_naiss']);
            $retraite->date_naiss = trim(Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($d['date_de_naiss'])));
            // $retraite->date_jouis = trim($d['date_de_jouissanc']);
            $retraite->date_jouis = trim(Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($d['date_de_jouissanc'])));
            $retraite->telephone = trim($d['numero_de_telephone']);
            $retraite->titre = trim($d['titre']);
            $retraite->montant_trim = trim($d['montant_trimest']);
            $retraite->montant_comp = trim($d['pension_complemen_taire']);
            // $retraite->montant_comp_plus = trim($d['oooo']);
            // $retraite->est_decede = trim($d['oooo']);
            $retraite->assignation = trim($d['assign']);
            $retraite->assignation1 = trim($d['assignat_1']);
            // $retraite->rip = trim($d['oooo']);
            // $retraite->banque = trim($d['oooo']);
            $retraite->societe_orig = trim($d['societes_dorigine']);
            // $retraite->est_nc = trim($d['oooo']);
            // $retraite->echeance_pre_vrmt = trim($d['oooo']);
            // $retraite->as_avance = trim($d['oooo']);
            // $retraite->montant_avance = trim($d['oooo']);
            // $retraite->nb_periode_avance = trim($d['oooo']);
            // $retraite->remb_pour_nb_periode = trim($d['oooo']);
            // $retraite->pre_ech_remb = trim($d['oooo']);
            // $retraite->der_ech_remb = trim($d['oooo']);
            // $retraite->taux_remb = trim($d['oooo']);
            // $retraite->solde_avance = trim($d['oooo']);
            $retraite->montant_arriere = trim($d['montant_arr']);
            $retraite->trim_du = trim($d['trim_du']);
            // $retraite->est_reclation = trim($d['oooo']);
            $retraite->montant_trim_reval = (int)$d['montant_trimest']+AppHelper::getPercentage(trim($d['montant_trimest']),40);
            $retraite->montant_mens_reval = trim($d['montant_mensuel_reval']);
            // $retraite->mappr = trim($d['oooo']);
            $retraite->af = trim($d['montant_des_allocat']);
            $retraite->observation = trim($d['observation']);
            $retraite->montant_a_payer = trim($d['montant_a_payer']);
            // $retraite->reste_remb = trim($d['oooo']);
            // $retraite->trim_remb = trim($d['oooo']);
            // $retraite->IDPROCURATION = trim($d['oooo']);
            $retraite->agence = trim($d['agence']);
            // $retraite->date_motif = trim($d['oooo'];
            // $retraite->date_dcd = trim($d['oooo'];
            // $retraite->date_declaration_dcd = trim($d['oooo'];
            // $retraite->est_suspendu = $d['oooo'];
            // $retraite->code_bank = $d['oooo'];
            // $retraite->code_agence = $d['oooo'];
            // $retraite->cle_rib = $d['oooo'];
            // $retraite->status = $d['oooo'];
            $retraite->created_by = Auth::user()->id;

            $retraite->save();

        }
        Alert::success('Fichier importé avec succès!', '');
        return redirect(route('payeRetraite.index',$request->echeance_id ))->with('yes','Enregistrer avec succes');


    }
    public function retraiteUpdate(Request $request)
    {
        $retraite = EtatRetraite::find($request->retraite_id);
        $echeance_id = $retraite->echeance->id;

        if($request->has('est_nc'))
            $nc = '1';
        else
            $nc = '0';
        // dd($request->all());

        $retraite->update([
            'num_pension' => $request->num_pension,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'type' => $request->type,
            'date_naiss' => $request->date_naiss,
            'date_jouis' => $request->date_jouis,
            'telephone' => $request->telephone,
            'titre' => $request->titre,
            'montant_trim' => $request->montant_trim,
            'montant_comp' => $request->montant_comp,
            'assignation' => $request->assignation,
            'assignation1' => $request->assignation1,
            'societe_orig' => $request->societe_orig,
            'montant_arriere' => $request->montant_arriere,
            'trim_du' => $request->trim_du,
            'af' => $request->af,
            'observation' => $request->observation,
            'montant_a_payer' => $request->montant_a_payer,
            'agence' => $request->agence,
            'montant_mens_reval' => $request->montant_mens_reval,
            'echeance_pre_vrmt' => $request->echeance_pre_vrmt,
            'code_bank' => $request->code_bank,
            'code_agence' => $request->code_agence,
            'cle_rib' => $request->cle_rib,
            // 'est_nc' => $nc,

        ]);

        Alert::success('Employer modifié avec succès!', '');
        return redirect(route('payeRetraite.index',$echeance_id ))->with('yes','Enregistrer avec succes');


    }
    public function getAss(Request $request)
    {
        // dd($request->all());
        $value = $request->get('option');
        $data = DB::table('pay_assignation')->where('assignation', $value)->select('assignation1')->get();

        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }
    public function decesIndex()
    {
        $deces = EtatDeces::all();
        // dd($deces);
        return view('paye.deces.index', compact('deces'));

    }
    public function suspensionIndex()
    {
        $suspendus = EtatSuspendu::all();
        return view('paye.suspension.index', compact('suspendus'));
    }



}
