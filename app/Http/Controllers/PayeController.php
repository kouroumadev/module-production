<?php

namespace App\Http\Controllers;

use App\Models\Echeance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PayeController extends Controller
{
    public function retraiteIndex() {
        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // $assignations = $data->distinct()->get(['assignation']);

        $echeances = Echeance::where('type','retraite')->first();
        // $assignation = $data->distinct()->get(['assignation']);

        //  dd($echeances);
        return view('paye.retraite.index', compact('assignations','echeances'));
    }

    // app/Http/Controllers/ProductController.php
    public function getAss(Request $request)
    {
        $value = $request->get('option');
        $data = DB::table('pay_assignation')->where('assignation', $value)->select('assignation1')->get();

        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }

}
