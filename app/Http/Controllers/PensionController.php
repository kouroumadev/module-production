<?php

namespace App\Http\Controllers;

use App\Models\Deposant;
use App\Models\Doc;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Dept;
use App\Models\Enfant;
use App\Models\user;
use App\Models\Wife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PensionController extends Controller
{
    public function show(){
        $emps = Auth::user()->employees;
        // dd($emps);
        return view('pensionnaire.show', compact('emps'));
    }
    public function details(int $id){
        $emp = Employee::find($id);
        $depts = Dept::all();
        // dd($emp);
        return view('pensionnaire.details', compact('emp','depts'));
    }
    public function store(Request $request) {
        // dd($request->all());
        // dd(json_decode($request->details));
        $user_id = Auth::user()->id;
        // dd($request->all());

        $file = $request->file('pensionnaire_photo')->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $img = $filename."-".time()."-".$request->no_ima_employee.".".$extension;

        Storage::disk('pensionnaireImg')->put($img,file_get_contents($request->file('pensionnaire_photo')));

        $employer = new Employer();
        $employer->no_employer = $request->no_employer;
        $employer->raison_sociale = $request->raison_sociale;
        $employer->category = $request->category;
        $employer->created_by = $user_id;
        $employer->save();
        $employer_last_id = $employer->id;


        $employee = new Employee();
        $employee->employer_id = $employer_last_id;
        $employee->no_ima_employee = $request->no_ima_employee;
        $employee->nom_employee = $request->nom_employee;
        $employee->prenom_employee = $request->prenom_employee;
        $employee->date_naissance_employee = $request->date_naissance_employee;
        $employee->lieu_naissance_employee = $request->lieu_naissance_employee;
        $employee->prefecture_employee = $request->prefecture_employee;
        $employee->tel_employee = $request->tel_employee;
        $employee->adresse_employee = $request->adresse_employee;
        $employee->situation_matri_employee = $request->situation_matri_employee;
        $employee->type_pension = $request->type_pension;
        $employee->photo = $img;
        $employee->created_by = $user_id;

        $employee->code_employe = $request->code_employe;
        $employee->date_jour = $request->date_jour;
        $employee->date_embauche = $request->date_embauche;
        $employee->date_etabl_cin = $request->date_etabl_cin;
        $employee->date_immatriculation = $request->date_immatriculation;
        $employee->datemodification = $request->datemodification;
        $employee->employeur_id = $request->employeur_id;
        $employee->lieu_etab_cin = $request->lieu_etab_cin;
        $employee->nationalite = $request->nationalite;
        $employee->date_created = $request->date_created;
        $employee->no_cin = $request->no_cin;
        $employee->nom_mere = $request->nom_employee;
        $employee->nom_pere = $request->nom_pere;
        $employee->pays_id = $request->pays_id;
        $employee->prefecture = $request->prefecture;
        $employee->prenom_mere = $request->prenom_mere;
        $employee->prenom_pere = $request->prenom_pere;
        $employee->no_employeur = $request->no_employeur;
        $employee->profession = $request->profession;
        $employee->sexe = $request->sexe;
        $employee->situationpro = $request->situationpro;
        $employee->statut = $request->statut;
        $employee->statut_employe_id = $request->statut_employe_id;
        $employee->adresse = $request->adresse;
        $employee->anciencode_employeur = $request->anciencode_employeur;
        $employee->ancien_num_employe = $request->ancien_num_employe;
        $employee->datesortie = $request->datesortie;
        $employee->tag_rattrapage = $request->tag_rattrapage;
        $employee->user_id = $request->user_id;
        $employee->categorie_id = $request->categorie_id;
        $employee->tag_deces = $request->tag_deces;
        $employee->tag_invalidite = $request->tag_invalidite;
        $employee->tag_compte_indiv = $request->tag_compte_indiv;
        $employee->tag_statut = $request->tag_statut;
        $employee->tag_famille = $request->tag_famille;
        $employee->prefecture_id = $request->prefecture_id;
        $employee->code_prefecture = $request->code_prefecture;
        $employee->agen_id = $request->agen_id;
        $employee->agencecode_id = $request->agencecode_id;
        $employee->tag_allocfam = $request->tag_allocfam;
        $employee->tag_famille_pf = $request->tag_famille_pf;
        $employee->tag_allocprepost = $request->tag_allocprepost;
        $employee->tag_ijcongemat = $request->tag_ijcongemat;
        $employee->tag_alloc_chomage = $request->tag_alloc_chomage;
        $employee->tag_allocataire_pf = $request->tag_allocataire_pf;
        $employee->tag_retraite = $request->tag_retraite;
        $employee->age_reel_deces = $request->age_reel_deces;
        $employee->assignation_id = $request->assignation_id;
        $employee->date_deces = $request->date_deces;
        $employee->no_acte_deces = $request->no_acte_deces;
        $employee->tag_famille_rp = $request->tag_famille_rp;
        $employee->tag_rente_deces = $request->tag_rente_deces;
        $employee->tag_suspension = $request->tag_suspension;
        $employee->matricule = $request->matricule;
        $employee->save();
        $employee_last_id = $employee->id;



        if($request->hasfile('files'))
         {
            $noms = [];
            $titles = [];
            $data = [];

            foreach($request->file('files') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->storeAs('public/docs', $name);
                $noms[] = $name;
            }

            for($i=0; $i<count($noms); $i++){
                $titles[] = $request->titles[$i];
            }

            $data['paths'] = $noms;
            $data['titles'] = $titles;

            $doc = new Doc();
            $doc->employee_id = $employee_last_id;
            $doc->data = $data;
            $doc->level = '';
            $doc->created_by = $user_id;
            $doc->save();
         }


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

        foreach(json_decode($request->details) as $data){
            $wife = new Wife();
            $wife->employee_id = $employee_last_id;
            $wife->nom_wife = $data->conjoint_name;
            $wife->prenom_wife = $data->conjoint_prenom;
            $wife->no_conjoint_wife = $data->no_conjoint;
            $wife->date_mariage_wife = $data->date_mariage;
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
        Alert::success(' Document Enregistré', '');
        return redirect(route('pension.index'))->with('yes','Enregistrer avec succes');


    }
}
