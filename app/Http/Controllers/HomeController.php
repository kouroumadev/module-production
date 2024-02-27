<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }
    public function login() {
        // Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
        return view('login');
    }
    public function PensionIndex() {

        return view('pensionnaire.index');
    }
    public function reclamationIndex() {
        return view('reclamation.index');
    }
    public function prestationIndex() {
        return view('prestation.index');
    }
    public function demandeIndex() {
        return view('demande.index');
    }
    public function PensionnaireInfo(Request $request){

        $no_immat = $request->no_immatriculation;
        $type_pension = $request->type_pension;
        // dd($no_immat);
        $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat)->get();
        // dd($employe);
        if($employe->isEmpty()){
            $flag = '1';
            // return view('pensionnaire.index', compact('flag'));
            // return Redirect::back()->withErrors(['flag' => '1']);
            // Alert::success('Success Title', 'Success Message');
            Alert::error(' Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
            return view('pensionnaire.index',compact('flag'));

        }

        $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe','=',$no_immat)->get();
        $no_employeur = $employe[0]->no_employeur;
        $employeur = DB::connection('metier')->table('employeur')->where('no_employeur','=',$no_employeur)->get();
        $employeDeails = [];
        // $wives = [];
        $data = [];
        // dd($employeur);

            foreach ($conjoints as $value) {
                // dd($value->no_conjoint);
                $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint',$value->no_conjoint)->get();
                $items = [
                    // 'employe' => $employe,
                    'enfants' =>$enfants,
                    'conjoint_name'=> $value->nom,
                    'conjoint_prenom'=> $value->prenoms,
                    'no_conjoint'=> $value->no_conjoint,


                ];
                // $items_wife = [
                //     // 'employe' => $employe,
                //     // 'enfants' =>$enfants,
                //     'conjoint_name'=> $value->nom,
                //     'conjoint_prenom'=> $value->prenoms,
                //     'no_conjoint'=> $value->no_conjoint,
                //     'date_mariage'=> $value->date_mariage,
                //     'date_naissance'=> $value->date_naissance,
                //     'lieu_naissance'=> $value->lieu_naissance,
                //     'sexe'=> $value->sexe,


                // ];
                array_push($employeDeails,$items);
                // array_push($wives,$items_wife);
            };
        //    dd($employeDeails);
            $data['employeDetails']= $employeDeails;
            $data['employe'] = $employe;
            $data['employeur'] = $employeur;
            // $data['wives'] = $wives;

            // dd($no_immat);

        // $data['employeDetails']= $employeDeails;
        //  $data['employe'] = $employe;
        //  $data['employeur'] = $employeur;
        // dd($data);
        // return view('pensionnaire.pensionnaire-info',compact('data'));
        return view('pensionnaire.index',compact('data','type_pension'));
    }

}
