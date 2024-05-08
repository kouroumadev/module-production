<?php

namespace App\Http\Controllers;

use App\Models\Echeance;
use App\Models\EtatRetraite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AppHelper;
use App\Imports\EtatRetraiteImport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


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

         $retraite = EtatRetraite::find($id)->first();
         $echeance =  $retraite->echeance;

        // dd($retraite);
        return view('paye.retraite.edit', compact('assignations','echeance','retraite'));
    }

    // app/Http/Controllers/ProductController.php
    public function retraiteFilter(Request $request)
    {
        // dd(date('Y-m-01 00:00:00'));


        // dd($firstDayOfMonth);


        $data = Echeance::find($request->echeance_id)->first()->retraites;
        // dd($data);

        foreach($data as $d) {
            // $d->created_at = AppHelper::getDateFormat($d->created_at);
            $d->url = route('payeRetraite.edit', $d->id);
            $d->updated_at = AppHelper::getDateFormat($d->updated_at);
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
        $echeance = Echeance::find($id)->first();
       return view('paye.retraite.create', compact('echeance'));
    }
    public function retraitePreview(Request $request)
    {
        $file = $request->file('file');
        $echeance = Echeance::find($request->echeance_id)->first();

        $data = Excel::toArray(new EtatRetraiteImport($request->echeance_id), $file);

        // dd($data[0]);

        return view('paye.retraite.create', compact('echeance','data'));
    }
    public function retraiteStoreAll(Request $request)
    {
        $data = unserialize($request->data);
        // dd($request->all());
        // dd($data[0]);

        foreach($data[0] as $d) {
            $retraite = new EtatRetraite();

            $retraite->echeance_id = $request->echeance_id;
            $retraite->num_pension = trim($d['n_de_pension']);
            $retraite->nom = trim($d['noms']);
            $retraite->prenom = trim($d['prenoms']);
            $retraite->type = trim($d['type']);
            $retraite->date_naiss = trim($d['date_de_naiss']);
            $retraite->date_jouis = trim($d['date_de_jouissanc']);
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
            $retraite->montant_trim_reval = AppHelper::getPercentage(trim($d['montant_trimest']),40);
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
    public function getAss(Request $request)
    {
        // dd($request->all());
        $value = $request->get('option');
        $data = DB::table('pay_assignation')->where('assignation', $value)->select('assignation1')->get();

        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }

    public function filterEtat(Request $request)
    {
        $type = $request->input('type');
        if($type == "all") {
            $data = Echeance::where('type','retraite')->first()->retraites;
        } elseif($type == "old") {
            // $data = Echeance::where('type','retraite')->first()->retraites->where('assignation','VIREMENT');
            $data = EtatRetraite::paginate(10);
        } else {
            $data = Echeance::where('type','retraite')->first()->retraites->where('assignation','KALOUM');
        }
        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }

}
