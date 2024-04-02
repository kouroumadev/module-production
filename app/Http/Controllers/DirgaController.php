<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use App\Models\Deadline;

class DirgaController extends Controller
{
    //
    public function DirgaIndex(){
        $dep_id = Auth::user()->dept_id;
        //dd($dep_id);
        //$docs = Doc::all();
        // $trans = Transfer::where('from_dept', Auth::user()->dept->id)->orWhere('to_dept', Auth::user()->dept->id)->get();
        $trans = Transfer::Where('to_dept', Auth::user()->dept->id)->where('status',0)->get();
        $deadline = Deadline::where('dept_id',Auth::user()->dept_id)->get();
        $dead_name = $deadline[0]->name;
        //dd($deadline);
        
        //dd($trans);
        return view('dirga.index', compact('dead_name','trans'));
    }
}
