<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeptController extends Controller
{
    public function index() {
        $depts = Dept::all();

        return view('dept.index', compact('depts'));
    }
    public function store(Request $request) {
        // dd($request->all());

        $dept = new Dept();
        $dept->name = $request->name;
        $dept->created_by = Auth::user()->id;
        $dept->save();
        return redirect(route('dept.index'))->with('yes','Enregistrer avec succes');
    }
}
