<?php

namespace App\Http\Controllers;

use App\Models\EtatRetraite;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\AppHelper;
use App\Models\Echeance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductionController extends Controller
{
    public function ncStore(Request $request) {



        $retraite = new EtatRetraite();

        $retraite->echeance_id = $request->echeance_id;
        $retraite->num_pension = trim($request->num_pension);
        $retraite->nom = trim($request->nom);
        $retraite->prenom = trim($request->prenom);
        $retraite->type = trim($request->type);
        $retraite->date_naiss = trim($request->date_naiss);
        $retraite->date_jouis = trim($request->date_jouis);
        $retraite->telephone = trim($request->telephone);
        $retraite->titre = trim($request->titre);
        $retraite->montant_trim = trim($request->montant_trim);
        $retraite->montant_comp = trim($request->montant_comp);
        $retraite->montant_comp_plus = trim($request->montant_comp_plus);
        // $retraite->est_decede = trim($request->oooo);
        $retraite->assignation = trim($request->assignation);
        $retraite->assignation1 = trim($request->assignation1);
        // $retraite->rip = trim($request->oooo);
        // $retraite->banque = trim($request->oooo);
        $retraite->societe_orig = trim($request->societe_orig);
        // $retraite->est_nc = trim($request->oooo);
        $retraite->echeance_pre_vrmt = trim($request->echeance_pre_vrmt);
        // $retraite->as_avance = trim($request->oooo);
        // $retraite->montant_avance = trim($request->oooo);
        $retraite->montant_arriere = trim($request->montant_arriere);
        // $retraite->nb_periode_avance = trim($request->oooo);
        // $retraite->remb_pour_nb_periode = trim($request->oooo);
        // $retraite->pre_ech_remb = trim($request->oooo);
        // $retraite->der_ech_remb = trim($request->oooo);
        // $retraite->taux_remb = trim($request->oooo);
        // $retraite->solde_avance = trim($request->oooo);
        $retraite->montant_arriere = trim($request->montant_arr);
        $retraite->trim_du = trim($request->trim_du);
        // $retraite->est_reclation = trim($request->oooo);
        $retraite->montant_trim_reval = (int)$request->montant_trim+ AppHelper::getPercentage(trim($request->montant_trim),40);
        $retraite->montant_mens_reval = trim($request->montant_mens_reval);
        // $retraite->mappr = trim($request->oooo);
        $retraite->af = trim($request->af);
        $retraite->observation = trim($request->observation);
        $retraite->montant_a_payer = trim($request->montant_a_payer);
        // $retraite->reste_remb = trim($request->oooo);
        // $retraite->trim_remb = trim($request->oooo);
        // $retraite->IDPROCURATION = trim($request->oooo);
        $retraite->agence = trim($request->agence);
        // $retraite->date_motif = trim($request->oooo'];
        // $retraite->date_dcd = trim($request->oooo'];
        // $retraite->date_declaration_dcd = trim($request->oooo'];
        // $retraite->est_suspendu = $request->oooo'];
        $retraite->code_bank = $request->code_bank;
        $retraite->code_agence = $request->code_agence;
        $retraite->cle_rib = $request->cle_rib;
        // $retraite->status = $request->oooo'];
        $retraite->created_by = Auth::user()->id;

        $retraite->save();

        Alert::success('NC crée avec succès!', '');
        return redirect(route('prod.ac.index'));


    }

    public function ncCreate() {

        $echeance = Echeance::where('status','1')->get();
        // dd($echeance->count());
        if($echeance->count() == 0){
            Alert::error("Echeance non disponible, veuillez contactez le DEPARTEMENT INFORMATIQUE !!", '');
            return redirect()->back();
        }
        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        $agences = DB::table('agences')->get();

        return view('production.nc', compact('echeance','assignations','agences'));

    }

    public function acIndex() {
        $echeance = Echeance::where('status','1')->get();
        if($echeance->count() == 0){
            Alert::error("Echeance non disponible, veuillez contactez le DEPARTEMENT INFORMATIQUE !!", '');
            return redirect()->back();
        }
        $data = EtatRetraite::all();

        // dd($data);
        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // return view('dipress.production.index', compact('data','echeance','assignations'));
        return view('production.index', compact('data','echeance','assignations'));
    }

    public function agencePensionIndex() {
        $echeance = Echeance::where('status','1')->get();
        if($echeance->count() == 0){
            Alert::error("Echeance non disponible, veuillez contactez le DEPARTEMENT INFORMATIQUE !!", '');
            return redirect()->back();
        }

        $agence = Auth::user()->name;

        // $data = EtatRetraite::where('type','01-')
        //                     ->where('assignation',$agence)->get();

        $assignations = DB::table('pay_assignation')->where('assignation',$agence)->get(['assignation1']);


        // dd($assignations);
        // $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // return view('dipress.production.index', compact('data','echeance','assignations'));
        return view('agence.pension-retraite', compact('echeance','assignations'));
    }
    public function agenceRetraiteFilter(Request $request)
    {
        // dd(date('Y-m-01 00:00:00'));


        // dd($firstDayOfMonth);


        // $data = Echeance::find($request->echeance_id)->first()->retraites;
        // $data = Echeance::where('status','1')->first()->retraites;
        // $data = EtatRetraite::all();
        $agence = Auth::user()->name;

        $data = EtatRetraite::where('type','01-')
                            ->where('assignation',$agence)->get();
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

        $ass1 = $request->assignation1;
        $etat = $request->etatRadio;
        $firstDayOfMonth = date('Y-m-01 00:00:00');

        $data = $data->when($etat && $etat == 'all', function ($query) {
                        return $query;
                    })
                    ->when($etat && $etat == 'old', function ($query) use ($firstDayOfMonth) {
                            // dd($query->where('created_at', '>', $firstDayOfMonth)); #2024-05-01 00:00:00
                        return $query->where('created_at', '<',  $firstDayOfMonth);
                    })
                    ->when($etat && $etat == 'new', function ($query) use ($firstDayOfMonth) {
                        return $query->where('created_at', '>=',  $firstDayOfMonth);
                    })
                    ->when($ass1, function ($query,  $ass1) {
                        return $query->where('assignation1',  $ass1);
                    });



        return response()->json($data);

    }
}
