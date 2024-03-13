<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Dept;
use App\Models\MiseRetraite;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


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
        // $emps = Auth::user()->employees;
        $emps = Employee::all();
        return view('dipress.etude-dossier.index', compact('emps'));
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
        $emp_full = DB::connection('metier')->table('employe')->where('no_employe','=','153030000017')->get();
        $emp = Employee::find($id);

        return view('dipress.mise-a-retraite.create', compact('emp','emp_full','prefectures'));
    }

    public function miseRetraiteStore(Request $request){

            // dd($request->all());

            if ($request->pension_type == 'Retraite'){
                $no = "01-0";
            } else {
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
            $data->annuite = $request->annuite;
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
            Alert::success('Mise a la retraite effectue avec success', '');
            return redirect(route('miseRetaite.index'))->with('yes','Enregistrer avec succes');


    }

    public function miseRetraiteIndex() {
            $data = MiseRetraite::all();
            return view('dipress.mise-a-retraite.index', compact('data'));
    }
    public function miseRetraiteDecompte(int $id) {
            $data = MiseRetraite::find($id);
            return view('dipress.mise-a-retraite.decompte', compact('data'));
    }
}
