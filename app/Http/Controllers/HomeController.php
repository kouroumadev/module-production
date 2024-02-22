<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Alert;

class HomeController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }
    public function login() {
        return view('login');
    }
    public function PensionIndex() {
        return view('pensionnaire.index');
    }
    public function prestationIndex() {
        return view('prestation.index');
    }
    public function PensionnaireInfo(Request $request){

        $no_immat = $request->no_immatriculation;
        // dd($no_immat);
        $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat)->get();
        // dd($employe);
        if($employe->isEmpty()){
            $flag = '1';
            // return view('pensionnaire.index', compact('flag'));
            // return Redirect::back()->withErrors(['flag' => '1']);
            // Alert::success('Success Title', 'Success Message');
            toast('Your Post as been submited!','success');
            return view('pensionnaire.index',compact('flag'));

        }

        $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe','=',$no_immat)->get();
        $no_employeur = $employe[0]->no_employeur;
        $employeur = DB::connection('metier')->table('employeur')->where('no_employeur','=',$no_employeur)->get();
        $employeDeails = [];
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
                array_push($employeDeails,$items);
            };
        //    dd($employeDeails);
            $data['employeDetails']= $employeDeails;
            $data['employe'] = $employe;
            $data['employeur'] = $employeur;

            // dd($no_immat);

        // $data['employeDetails']= $employeDeails;
        //  $data['employe'] = $employe;
        //  $data['employeur'] = $employeur;
        // dd($data);
        // return view('pensionnaire.pensionnaire-info',compact('data'));
        return view('pensionnaire.index',compact('data'));
    }

}
