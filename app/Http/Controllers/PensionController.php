<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PensionController extends Controller
{
    public function store(Request $request) {
        dd($request->all());
    }
}
