<?php

namespace App\Http\Controllers;

use App\Models\Deposant;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Enfant;
use App\Models\Wife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PensionController extends Controller
{
    public function show(){
        $emps = Auth::user()->employees;
        // dd($emps);
        return view('pensionnaire.show', compact('emps'));
    }
    public function details(int $id){
        $emp = Employee::find($id);
        return view('pensionnaire.details', compact('emp'));
    }
    public function store(Request $request) {
        // dd(json_decode($request->details));
        $user_id = Auth::user()->id;

        $employee = new Employee();
        $employee->no_ima_employee = $request->no_ima_employee;
        $employee->nom_employee = $request->nom_employee;
        $employee->prenom_employee = $request->prenom_employee;
        $employee->date_naissance_employee = $request->date_naissance_employee;
        $employee->lieu_naissance_employee = $request->lieu_naissance_employee;
        $employee->prefecture_employee = $request->prefecture_employee;
        $employee->tel_employee = $request->tel_employee;
        $employee->adresse_employee = $request->adresse_employee;
        $employee->situation_matri_employee = $request->situation_matri_employee;
        $employee->created_by = $user_id;
        $employee->save();
        $employee_last_id = $employee->id;

        $deposant = new Deposant();
        $deposant->employee_id = $employee_last_id;
        $deposant->nom_deposant = $request->nom_deposant;
        $deposant->prenom_deposant = $request->prenom_deposant;
        $deposant->telephone_deposant = $request->telephone_deposant;
        $deposant->adresse_deposant = $request->adresse_deposant;
        $deposant->cin_deposant = $request->cin_deposant;
        $deposant->email_deposant = $request->email_deposant;
        $deposant->created_by = $user_id;
        $deposant->save();

        $employer  = new Employer();
        $employer->employee_id = $employee_last_id;
        $employer->no_employer = $request->no_employer;
        $employer->raison_sociale = $request->raison_sociale;
        $employer->category = $request->category;
        $employer->created_by = $user_id;
        $employer->save();


        foreach(json_decode($request->details) as $data){
            $wife = new Wife();
            $wife->employee_id = $employee_last_id;
            $wife->nom_wife = $data->conjoint_name;
            $wife->prenom_wife = $data->conjoint_prenom;
            $wife->no_conjoint_wife = $data->no_conjoint;
            $wife->date_mariage_wife = $data->date_mariage;
            $wife->sexe_wife = $data->sexe;
            $wife->date_naissance_wife = $data->date_naissance;
            $wife->lieu_naissance_wife = $data->lieu_naissance;
            $wife->created_by = $user_id;
            $wife->save();
            $wife_last_id = $wife->id;

            if(count($data->enfants) > 0){
                foreach($data->enfants as $enf){
                    $child = new Enfant();
                    $child->employee_id = $employee_last_id;
                    $child->wife_id = $wife_last_id;
                    $child->nom_enfant = $enf->nom;
                    $child->prenom_enfant = $enf->prenoms;
                    $child->sexe_enfant = $enf->sexe;
                    $child->date_naissance_enfant = $enf->date_naissance;
                    $child->lieu_naissance_enfant = $enf->lieu_naissance;
                    $child->ordre_naissance_enfant = $enf->ordre;
                    $child->created_by = $user_id;
                    $child->save();

                }
            }

        }

        return redirect(route('pension.show'))->with('yes','Enregistrer avec succes');


    }
}
