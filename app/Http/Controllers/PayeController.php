<?php

namespace App\Http\Controllers;

use App\Models\Echeance;
use App\Models\EtatRetraite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PayeController extends Controller
{
    public function retraiteIndex() {
        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // $assignations = $data->distinct()->get(['assignation']);

        // $echeances = Echeance::where('type','retraite')->first()->retraites->paginate(10);
        $echeances = EtatRetraite::all();
        // $assignation = $data->distinct()->get(['assignation']);

        //   dd($echeances);
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

    public function filterEtat(Request $request)
    {
        $type = $request->input('type');
        if($type == "all") {
            $data = Echeance::where('type','retraite')->first()->retraites;
        } elseif($type == "old") {
            // $data = Echeance::where('type','retraite')->first()->retraites->where('assignation','VIREMENT');
            $data = EtatRetraite::paginate(10);
        } else {
            $data = Echeance::where('type','retraite')->first()->retraites->where('assignation','KALOUM');
        }



        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }

}
