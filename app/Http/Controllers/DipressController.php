<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Decompte;
use App\Models\Employee;
use App\Models\Dept;
use App\Models\Doc;
use App\Models\MiseRetraite;
use App\Models\Prefecture;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;


class DipressController extends Controller
{
    public function vieillesse() {
        return view('dipress.vieillesse');
    }
    public function maladie() {
        return view('dipress.maladie');
    }
    public function risque() {
        return view('dipress.risque');
    }
    public function prestation() {
        return view('dipress.prestation');
    }
     public function pensionContent() {
        // $emps = Auth::user()->employees;
        $emps = Employee::all();
        return view('dipress.content.pension', compact('emps'));
    }

    // SECTION ETUDE
    public function etudeIndex() {
        $dep_id = Auth::user()->dept_id;
        // $emps = Auth::user()->employees;
        // dd($emps);
        // $docs = Doc::all();

        $trans = Transfer::where('from_dept', Auth::user()->dept->id)->orWhere('to_dept', Auth::user()->dept->id)->get();
        $deadline = Deadline::where('dept_id',Auth::user()->dept_id)->get();

        if(count($deadline)>0){
            $dead_name = $deadline[0]->name;
        } else {
            $dead_name = "";
        }


        // dd($data);
        return view('dipress.etude-dossier.index', compact('trans','dead_name'));
    }

    public function etudeTraitement(int $id){
        $emp = Employee::find($id);

        $comptes = DB::connection('metier')->table('gest_employe')
                        ->where('no_employe',$emp->no_ima_employee)->get();

        // dd($comptes);


        $depts = Dept::all();
        // dd($emp);
        return view('dipress.etude-dossier.traitement', compact('emp','depts','comptes'));
    }

    public function PensionneCotisationInfo(int $id){
        $pensioneInfo = DB::connection('metier')->table('pensionne')->where('no_employe',$id)->get();
        dd($pensioneInfo);
    }

    //MISE EN RETARITE
    public function miseRetraiteCreate(int $id) {

        $prefectures = Prefecture::all();
        // $emp_full = DB::connection('metier')->table('employe')->where('no_employe','=','153030000017')->get();
        $emp = Employee::find($id);

        // dd($emp);

        return view('dipress.mise-a-retraite.create', compact('emp','prefectures'));
    }

    public function miseRetraiteStore(Request $request){

            // dd($request->all());

            $annuite = \Carbon\Carbon::parse($request->first_job_date)->diff($request->end_job_date)->format('%y ans et %m mois ');
            // dd($request->first_job_date, $request->end_job_date, $annuite);

            if ($request->pension_type == 'Retraite'){
                $no = "01-0";
            } else {
                $last = MiseRetraite::all()->last();
                $no = "01-0";
            }
            $data = new MiseRetraite();

            $data->employee_id = $request->emp_id;
            $data->pension_type = $request->pension_type;
            $data->no_pensionne = $no;
            $data->no_bio = $request->no_bio;
            $data->assign_pref_id = $request->assign_pref_id;
            $data->first_job_date = $request->first_job_date;
            $data->end_job_date = $request->end_job_date;
            $data->annuite = $annuite;
            $data->date_imma = $request->date_imma;
            $data->last_location = $request->last_location;
            $data->prefecture_id = $request->prefecture_id;
            $data->socio_profess = $request->socio_profess;
            $data->profession = $request->profession;
            $data->email = $request->email;
            $data->tel = $request->tel;
            $data->sexe = $request->sexe;
            $data->age = $request->age;
            $data->created_by = Auth::user()->id;

            $data->save();

            $emp = Employee::find($request->emp_id);
            $emp->update([
                'tag_retraite' => 0,
                'tel_employee' => $request->tel,
                'email_employee' => $request->email,
                'date_embauche' => $request->first_job_date,
                'no_cin' => $request->no_ci,
                'assignation_id' => $request->assign_pref_id,
                'adresse_employee' => $request->last_location,
                'profession' => $request->profession,
            ]);



            Alert::success('Mise a la retraite effectue avec success', '');
            return redirect(route('miseRetaite.index'))->with('yes','Enregistrer avec succes');


    }

    public function miseRetraiteIndex() {
            $data = MiseRetraite::all();

            return view('dipress.mise-a-retraite.index', compact('data'));
    }
    public function miseRetraiteDecompte(int $id) {
            $data = MiseRetraite::find($id);

            $comptes = DB::connection('metier')->table('gest_employe')
                        ->where('no_employe','296241250990')
                        ->select('annee', 'no_employe', 'salairebrut', DB::raw('count(*) as mois'), DB::raw("SUM(salairebrut) as salaireAnnuel"))
                        // ->select('annee', DB::raw('count(*) as mois'))
                        ->groupBy('annee')
                        ->get();

                        // dd($comptes);
                        // dd($data);

            return view('dipress.mise-a-retraite.decompte', compact('data','comptes'));
    }
    public function miseRetraiteDecompteSuite(int $id) {
            $data = MiseRetraite::find($id);

            $comptes = DB::connection('metier')->table('gest_employe')
                        ->where('no_employe',$data->employee->no_ima_employee) #296241250990
                        ->select('annee', 'no_employe', 'salairebrut', DB::raw('count(*) as mois'), DB::raw("SUM(salairebrut) as salaireAnnuel"))
                        // ->select('annee', DB::raw('count(*) as mois'))
                        ->groupBy('annee')
                        ->get();

                        // dd($comptes);

            return view('dipress.mise-a-retraite.suite', compact('data','comptes'));
    }

    public function miseRetraiteDecompteStore(Request $request) {
        // dd($request->all());

        $dec = new Decompte();

      $dec->employee_id = $request->employee_id;
      $dec->mise_retraite_id = $request->mise_retraite_id;
      $dec->sal_moy_mens = $request->sal_moy_mens;
      $dec->mont_mens_pens = $request->mont_mens_pens;
      $dec->pens_trimes = $request->pens_trimes;
      $dec->montant_arr = $request->montant_arr;
      $dec->mont_revalo = $request->mont_revalo;
      $dec->montant_tot_pens = $request->montant_tot_pens;
      $dec->montant_tot_first_pay = $request->montant_tot_first_pay;
      $dec->nbre_mois_tot = $request->nbre_mois_tot;
      $dec->prescription = $request->prescription;
      $dec->solde_compte = $request->solde_compte;
      $dec->mont_annu_pension = $request->mont_annu_pension;

      $dec->save();

      $last_id = $dec->id;

      Alert::success('Decompte effecuté avec succès !', '');
      return redirect(route('miseRetaite.decompte.done',$last_id ))->with('yes','Enregistrer avec succes');


    }
    public function miseRetraiteDecompteDone(int $id) {

            $data = Decompte::find($id);
            $depts = Dept::all();

            // dd($data->miseRetraite->annuite);

             //FICHE DECOMPTE
             $annuite_string = explode(" ",$data->miseRetraite->annuite);
             $annuite = (int)$annuite_string[0];
             $month = (int)$annuite_string[3];

             $decompteData = [
                'date' => date('m/d/Y'),
                'no_dossier' => $data->miseRetraite->no_pensionne,
                'prenom' => $data->employee->prenom_employee,
                'nom' => $data->employee->nom_employee,
                'no_assure' => $data->employee->no_ima_employee,
                'date_naiss' => $data->employee->date_naissance_employee,
                'lieu_naiss' => $data->employee->lieu_naissance_employee,
                'agence' => $data->employee->agencecode_id,
                'assign' => $data->miseRetraite->assign_pref_id,
                'employer' => $data->employee->employer->raison_sociale,
                'salaire' => $data->sal_moy_mens,
                'annuite' => $data->miseRetraite->annuite,
                'percent' => $annuite*2,
                'mont_ann_pension' => $data->mont_annu_pension,
                'mont_trimestre' => $data->pens_trimes,
                'mont_trimestre_revalorise' => $data->mont_revalo,
                'mont_AF' => number_format(count($data->employee->enfants)*9000,0,""," "),
                'mont_total_pension' => $data->montant_tot_pens,
                'no_imma' => $data->employee->no_ima_employee,
                'photo' => $data->employee->photo,
                'pere' => $data->employee->prenom_pere,
                'mere' => $data->employee->prenom_mere." ".$data->employee->nom_mere,
                'c_in' => $data->employee->no_cin,
                'date_end_job' => $data->miseRetraite->end_job_date,
                'enfnats' => $data->employee->enfants,


            ];

            $pdf = PDF::loadView('files.decompte.fiche-decompte', $decompteData);
            $path = storage_path('app/public/decompteFiles');
            $fileName = $data->id.'-fiche-decompte.pdf';
            $pdf->save($path . '/' . $fileName);

            //CARTE REATRAITE
            $pdf = PDF::loadView('files.decompte.carte-retraite', $decompteData);
            $path = storage_path('app/public/decompteFiles');
            $fileName = $data->id.'-carte-retraite.pdf';
            $pdf->save($path . '/' . $fileName);

            //CARTE PAIE
            $pdf = PDF::loadView('files.decompte.fiche-paie', $decompteData);
            $path = storage_path('app/public/decompteFiles');
            $fileName = $data->id.'-fiche-paie.pdf';
            $pdf->save($path . '/' . $fileName);



            return view('dipress.mise-a-retraite.done', compact('data','depts'));
    }
    public function miseRetraiteDecompteDetails(int $id, int $year) {

        $comptes = DB::connection('metier')->table('gest_employe')
                    ->where('no_employe',$id)
                    ->where('annee',$year)
                    ->get();

        return view('dipress.mise-a-retraite.details', compact('comptes'));

    }
}
