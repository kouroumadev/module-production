<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use App\Models\Deadline;

class ATController extends Controller
{
    public function AtIndex(){
        $dep_id = Auth::user()->dept_id;
        
        $trans = Transfer::Where('to_dept', Auth::user()->dept->id)->where('status',0)->get();
        $deadline = Deadline::where('dept_id',Auth::user()->dept_id)->get();
        $dead_name = $deadline[0]->name;
       
        return view('at.index', compact('dead_name','trans'));
    }
}
