<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Dept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
}
