<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }
    public function home() {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }
    public function login() {
        // Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
        return view('login');
    }
    public function PensionIndex() {
        $emps = Auth::user()->employees;
        return view('pensionnaire.index', compact('emps'));
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
        // dd($type_pension);
        if ($type_pension == "reversion" || $type_pension == "Pensions Temporaires d'Orphelin" ) {
            $pensionne = DB::connection('metier')->table('pensionne')->where('no_pensionne','=',$no_immat)->get();
            
             // cheching if pensionne number exist  in pensionne table.////
            if ($pensionne->isEmpty()) {
                Alert::error('', "Ce N° de pension n'existe pas dans la base de données de la CNSS");
                return view('pensionnaire.index');
            } else {
                // cheching if pensionne employe_number exist  in employee table.////
                $no_immat_pensionne = $pensionne[0]->no_employe;
                $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat_pensionne)->get();
                $emp_app = Employee::where('no_ima_employee', $employe[0]->no_employe)->get();
            
                //dd($emp_app);
                if($emp_app->isEmpty()){
                    Alert::error('', "Ce N° de pension n'est pas associé à un assuré de la CNSS");
                    return view('pensionnaire.index');
                }

                $emp = Employee::where('no_ima_employee', $no_immat)->get();
                $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe','=',$no_immat)->get();
                $no_employeur = $employe[0]->no_employeur;
                $employeur = DB::connection('metier')->table('employeur')->where('no_employeur','=',$no_employeur)->get();
                $employeDeails = [];
                
                $data = [];
            

                    foreach ($conjoints as $value) {
                    
                        $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint',$value->no_conjoint)->get();
                        $items = [
                            
                            'enfants' =>$enfants,
                            'conjoint_name'=> $value->nom,
                            'conjoint_prenom'=> $value->prenoms,
                            'no_conjoint'=> $value->no_conjoint,
                            'date_mariage'=> $value->date_mariage,
                            'date_naissance'=> $value->date_naissance,
                            'lieu_naissance'=> $value->lieu_naissance,


                        ];
                    
                        array_push($employeDeails,$items);
                        
                    };
                
                    $data['employeDetails']= $employeDeails;
                    $data['employe'] = $employe;
                    $data['employeur'] = $employeur;
                return view('pensionnaire.index',compact('data','type_pension'));
            }
            //dd($type_pension);
        } else {
                $emp = Employee::where('no_ima_employee', $no_immat)->get();
                $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat)->get();

                if ($type_pension == "Selectionner le type de pension") {
                $flag = '1';
    
                Alert::error('Invalide Type de pension', 'Selectionner le type de pension');
                return view('pensionnaire.index',compact('flag'));
                } else if($employe->isEmpty()){
                    $flag = '1';
        
                    Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
                    return view('pensionnaire.index',compact('flag'));
                } elseif (!$emp->isEmpty()) {
                    Alert::error('', "Ce N° d'Immatriculation existe deja dans la base de données de la CNSS");
                    return view('pensionnaire.index');
                }

                $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe','=',$no_immat)->get();
                $no_employeur = $employe[0]->no_employeur;
                $employeur = DB::connection('metier')->table('employeur')->where('no_employeur','=',$no_employeur)->get();
                $employeDeails = [];
                
                $data = [];
            

                    foreach ($conjoints as $value) {
                    
                        $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint',$value->no_conjoint)->get();
                        $items = [
                            
                            'enfants' =>$enfants,
                            'conjoint_name'=> $value->nom,
                            'conjoint_prenom'=> $value->prenoms,
                            'no_conjoint'=> $value->no_conjoint,
                            'date_mariage'=> $value->date_mariage,
                            'date_naissance'=> $value->date_naissance,
                            'lieu_naissance'=> $value->lieu_naissance,


                        ];
                    
                        array_push($employeDeails,$items);
                        
                    };
                
                    $data['employeDetails']= $employeDeails;
                    $data['employe'] = $employe;
                    $data['employeur'] = $employeur;
                    return view('pensionnaire.index',compact('data','type_pension'));
        }
        
        // $emp = Employee::where('no_ima_employee', $no_immat)->get();
        // $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat)->get();


        // $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe','=',$no_immat)->get();
        // $no_employeur = $employe[0]->no_employeur;
        // $employeur = DB::connection('metier')->table('employeur')->where('no_employeur','=',$no_employeur)->get();
        // $employeDeails = [];
        
        // $data = [];
       

        //     foreach ($conjoints as $value) {
               
        //         $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint',$value->no_conjoint)->get();
        //         $items = [
                    
        //             'enfants' =>$enfants,
        //             'conjoint_name'=> $value->nom,
        //             'conjoint_prenom'=> $value->prenoms,
        //             'no_conjoint'=> $value->no_conjoint,
        //             'date_mariage'=> $value->date_mariage,
        //             'date_naissance'=> $value->date_naissance,
        //             'lieu_naissance'=> $value->lieu_naissance,


        //         ];
               
        //         array_push($employeDeails,$items);
                
        //     };
        
        //     $data['employeDetails']= $employeDeails;
        //     $data['employe'] = $employe;
        //     $data['employeur'] = $employeur;

            
            
            

        // // ///////If reversion or PTO is selected ///////////////////
        // if ($type_pension == "reversion" || $type_pension == "Pensions Temporaires d'Orphelin"  ) {

        //     dd($type_pension);
        //     $pensionne = DB::connection('metier')->table('pensionne')->where('no_pensionne','=',$no_immat)->get();
            
        //     // cheching if pensionne number exist  in pensionne table.////
        //     if ($pensionne->isEmpty()) {
        //         Alert::error('', "Ce N° de pension n'existe pas dans la base de données de la CNSS");
        //         return view('pensionnaire.index');
        //     } else {
        //         // cheching if pensionne employe_number exist  in employee table.////
        //         $no_immat_pensionne = $pensionne[0]->no_employe;
        //         $employe = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat_pensionne)->get();
        //         //dd($employe);
        //         if($employe->isEmpty()){
        //             Alert::error('', "Ce N° de pension n'est pas associé à un assuré de la CNSS");
        //             return view('pensionnaire.index');
        //         }
        //         return view('pensionnaire.index',compact('data','type_pension'));
        //     }
            
            
        // }
        // else {
        //     if ($type_pension == "Selectionner le type de pension") {
        //         $flag = '1';
    
        //         Alert::error('Invalide Type de pension', 'Selectionner le type de pension');
        //         return view('pensionnaire.index',compact('flag'));
        //     } else if($employe->isEmpty()){
        //         $flag = '1';
    
        //         Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
        //         return view('pensionnaire.index',compact('flag'));
        //     } elseif (!$emp->isEmpty()) {
        //         Alert::error('', "Ce N° d'Immatriculation existe deja dans la base de données de la CNSS");
        //         return view('pensionnaire.index');
        //     }

        //     return view('pensionnaire.index',compact('data','type_pension'));
        // }

        
            
        
    }

}
