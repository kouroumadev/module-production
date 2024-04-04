<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use PhpParser\Node\Stmt\TryCatch;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\QueryException;



class ReclamationController extends Controller
{
    public function AvancePension(){

        return view('reclamation.avance-pension');
    }

    public function ReclamationInfo(Request $request){

        try {
            $no_pens = $request->no_pension;
            $type_pension = $request->type_pension;
            $pensionne = DB::connection('metier')->table('pensionne')->where('no_pensionne','=',$no_pens)->get();
    
            if ($pensionne->isEmpty()) {
                Alert::error('', "Ce N° de pension n'existe pas dans la base de données de la CNSS");
                    return redirect()->back();
            } else {
                $no_immat = $pensionne[0]->no_employe;
    
                $emp_app = Employee::where('no_ima_employee', $no_immat)->get();
                $emp_metier = DB::connection('metier')->table('employe')->where('no_employe','=',$no_immat)->get();
                
                //dd($emp_app);
                return view('reclamation.reclamation-info',compact('emp_app','emp_metier'));
            }
        } catch (QueryException $e) {
            Alert::error('error', $e);
            return view('reclamation.avance-pension');
        }

        
        
        //dd($pensionne);
     
    }
}
