<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Employee;
use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function home()
    {
        $first_log = Auth::user()->is_first;
        $id = Auth::user()->id;
        if (Auth::check() && $first_log == 1) {
            //dd("fist login");
            return view('first-login', compact('id'));
        } elseif (Auth::check() && $first_log == 0) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }

    public function login()
    {
        // Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
        return view('login');
    }
    public function PensionIndex()
    {
        //$emps = Auth::user()->employees;
        $docs = Doc::all();
        // $deadline = Deadline::where('dept_id',Auth::user()->dept_id)->get();
        // $dead_name = $deadline[0]->name;
        //dd($docs->transfers);
        return view('pensionnaire.index', compact('docs'));
    }
    public function reclamationIndex()
    {
        return view('reclamation.index');
    }
    public function prestationIndex()
    {
        return view('prestation.index');
    }

    public function demandeIndex()
    {
        return view('demande.index');
    }
    public function PensionnaireInfo(Request $request)
    {

        $no_immat = $request->no_immatriculation;
        $type_pension = $request->type_pension;
        // dd($type_pension);
        if ($type_pension == "reversion" || $type_pension == "Pensions Temporaires d'Orphelin") {
            $pensionne = DB::connection('metier')->table('pensionne')->where('no_pensionne', '=', $no_immat)->get();
            //dd($pensionne);
            // cheching if pensionne number exist  in pensionne table.////
            if ($pensionne->isEmpty()) {
                Alert::error('', "Ce N° de pension n'existe pas dans la base de données de la CNSS");
                return view('pensionnaire.index');
            } else {
                // cheching if pensionne employe_number exist  in employee table.////
                $no_immat_pensionne = $pensionne[0]->no_employe;
                $employe = DB::connection('metier')->table('employe')->where('no_employe', '=', $no_immat_pensionne)->get();
                $emp_app = Employee::where('no_ima_employee', $no_immat_pensionne)->get();

                //dd($emp_app);
                if ($emp_app->isEmpty()) {
                    Alert::error('', "Ce N° de pension n'est pas associé à un assuré de la CNSS");
                    return view('pensionnaire.index');
                }

                $emp = Employee::where('no_ima_employee', $no_immat)->get();
                $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe', '=', $no_immat)->get();
                $no_employeur = $employe[0]->no_employeur;
                $employeur = DB::connection('metier')->table('employeur')->where('no_employeur', '=', $no_employeur)->get();
                $employeDeails = [];

                $data = [];


                foreach ($conjoints as $value) {

                    $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint', $value->no_conjoint)->get();
                    $items = [

                        'enfants' => $enfants,
                        'conjoint_name' => $value->nom,
                        'conjoint_prenom' => $value->prenoms,
                        'no_conjoint' => $value->no_conjoint,
                        'date_mariage' => $value->date_mariage,
                        'date_naissance' => $value->date_naissance,
                        'lieu_naissance' => $value->lieu_naissance,


                    ];

                    array_push($employeDeails, $items);
                };

                $data['employeDetails'] = $employeDeails;
                $data['employe'] = $employe;
                $data['employeur'] = $employeur;
                $data['emp_app'] = $emp_app;
                //dd($data['emp_app']);
                return view('pensionnaire.index', compact('data', 'type_pension'));
            }
            //dd($type_pension);
        } else {
            $emp = Employee::where('no_ima_employee', $no_immat)->get();
            $employe = DB::connection('metier')->table('employe')->where('no_employe', '=', $no_immat)->get();
            //dd($employe[0]->tag_retraite);
            if ($type_pension == "Selectionner le type de pension") {
                $flag = '1';

                Alert::error('Invalide Type de pension', 'Selectionner le type de pension');
                return view('pensionnaire.index', compact('flag'));
            } else if ($employe->isEmpty()) {
                $flag = '1';

                Alert::error('Invalide Numéro', 'Ce N° d\'Immatriculation n\'existe pas dans la base de données de la CNSS');
                return view('pensionnaire.index', compact('flag'));
            } elseif (!$emp->isEmpty()) {
                Alert::error('', "Ce N° d'Immatriculation existe deja dans la base de données de la CNSS");
                return view('pensionnaire.index');
            }
            // elseif ($employe[0]->tag_retraite == 0) {
            //     Alert::error('', "Cet employe(é) est déjà à la retraite");
            //     return view('pensionnaire.index');
            // }

            $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe', '=', $no_immat)->get();
            $no_employeur = $employe[0]->no_employeur;
            $employeur = DB::connection('metier')->table('employeur')->where('no_employeur', '=', $no_employeur)->get();
            $employeDeails = [];

            $data = [];


            foreach ($conjoints as $value) {

                $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint', $value->no_conjoint)->get();
                $items = [

                    'enfants' => $enfants,
                    'conjoint_name' => $value->nom,
                    'conjoint_prenom' => $value->prenoms,
                    'no_conjoint' => $value->no_conjoint,
                    'date_mariage' => $value->date_mariage,
                    'date_naissance' => $value->date_naissance,
                    'lieu_naissance' => $value->lieu_naissance,


                ];

                array_push($employeDeails, $items);
            };

            $data['employeDetails'] = $employeDeails;
            $data['employe'] = $employe;
            $data['employeur'] = $employeur;
            //dd($data['employeDetails']);
            return view('pensionnaire.index', compact('data', 'type_pension'));
        }
    }
}
