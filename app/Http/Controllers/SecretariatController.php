<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;

class SecretariatController extends Controller
{
    
    public function SercretariatIndex(){

        $emps = Doc::all();
        
        //dd($emps->employee);
        return view('secretariat.index', compact('emps'));
    }
}
