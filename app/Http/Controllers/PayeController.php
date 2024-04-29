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

    // app/Http/Controllers/ProductController.php
    public function retraiteFilter(Request $request)
    {
        // dd($request->all());
        $data = Echeance::find($request->echeance_id)->first()->retraites();
        // dd($data);

        if($request->has('typeRadio')){
            dd('pas bon');

        } else {
            $rep = $data->where('type','01-')->get();
            return response()->json($rep);
        }

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

        // dd($data[0][0]);

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
            $retraite->num_pension =$d['n_de_pension'];
            $retraite->nom = $d['noms'];
            $retraite->prenom = $d['prenoms'];
            $retraite->type = $d['type'];
            $retraite->date_naiss = $d['date_de_naiss'];
            $retraite->date_jouis = $d['date_de_jouissanc'];
            $retraite->telephone = $d['numero_de_telephone'];
            $retraite->titre = $d['titre'];
            $retraite->montant_trim = $d['montant_trimest'];
            $retraite->montant_comp = $d['pension_complemen_taire'];
            // $retraite->montant_comp_plus = $d['oooo'];
            // $retraite->est_decede = $d['oooo'];
            $retraite->assignation = $d['assign'];
            $retraite->assignation1 = $d['assignat_1'];
            // $retraite->rip = $d['oooo'];
            // $retraite->banque = $d['oooo'];
            $retraite->societe_orig = $d['societes_dorigine'];
            // $retraite->est_nc = $d['oooo'];
            // $retraite->echeance_pre_vrmt = $d['oooo'];
            // $retraite->as_avance = $d['oooo'];
            // $retraite->montant_avance = $d['oooo'];
            // $retraite->nb_periode_avance = $d['oooo'];
            // $retraite->remb_pour_nb_periode = $d['oooo'];
            // $retraite->pre_ech_remb = $d['oooo'];
            // $retraite->der_ech_remb = $d['oooo'];
            // $retraite->taux_remb = $d['oooo'];
            // $retraite->solde_avance = $d['oooo'];
            $retraite->montant_arriere = $d['montant_arr'];
            $retraite->trim_du = $d['trim_du'];
            // $retraite->est_reclation = $d['oooo'];
            $retraite->montant_trim_reval = $d['montant_mensuel_reval'];
            // $retraite->mappr = $d['oooo'];
            $retraite->af = $d['montant_des_allocat'];
            $retraite->observation = $d['observation'];
            $retraite->montant_a_payer = $d['montant_a_payer'];
            // $retraite->reste_remb = $d['oooo'];
            // $retraite->trim_remb = $d['oooo'];
            // $retraite->IDPROCURATION = $d['oooo'];
            $retraite->agence = $d['agence'];
            // $retraite->date_motif = $d['oooo'];
            // $retraite->date_dcd = $d['oooo'];
            // $retraite->date_declaration_dcd = $d['oooo'];
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
