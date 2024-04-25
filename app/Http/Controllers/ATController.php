<?php

namespace App\Http\Controllers;

use App\Models\Accident;
use App\Models\Deadline;
use App\Models\Employee;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ATController extends Controller
{
    public function AtIndex()
    {
        $dep_id = Auth::user()->dept_id;

        $trans = Transfer::Where('to_dept', Auth::user()->dept->id)->where('status', 0)->get();
        $deadline = Deadline::where('dept_id', Auth::user()->dept_id)->get();
        $dead_name = $deadline[0]->name;

        return view('at.index', compact('dead_name', 'trans'));
    }

    public function AtTraitement(int $employee_id)
    {

        $emp = Employee::find($employee_id);
        $accident = Accident::where('employee_id', $employee_id)->get();

        $comptes = DB::connection('metier')->table('gest_employe')
            ->where('no_employe', $emp->no_ima_employee)->get();
        dd($comptes[0]->salairebrut);

        return view('at.traitement', compact('emp', 'comptes'));
    }
}
