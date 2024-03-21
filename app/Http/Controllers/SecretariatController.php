<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;
use Illuminate\Support\Facades\Auth;

class SecretariatController extends Controller
{
    
    public function SercretariatIndex(){
        $dep_id = Auth::user()->dept_id;
        //dd($dep_id);
        $docs = Doc::all();
        
        //dd($docs->employees);
        return view('secretariat.index', compact('docs','dep_id'));
    }
}
