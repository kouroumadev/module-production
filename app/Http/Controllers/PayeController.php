<?php

namespace App\Http\Controllers;

use App\Models\Echeance;
use App\Models\EtatRetraite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AppHelper;


class PayeController extends Controller
{
    public function index() {
        $data = Echeance::all();
        // foreach ($data as $user) {
        //     $user->example = '<a href="/user/' . $user->id . '"> Traitement <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
        // }
        $mois = DB::table('mois')->get();

        return view('paye.index', compact('data', 'mois'));
    }

    public function test()
    {
        $data = Echeance::all();
        foreach ($data as $user) {
            $user->example = '<a href="/user/' . $user->id . '"> Traitement <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
            $user->created_at = AppHelper::getDateFormat($user->created_at);
            $user->created_by = AppHelper::getUserName($user->created_by);
        }
        return response()->json($data);
    }
    public function retraiteIndex(int $id) {
        // dd($request->all());

        $assignations = DB::table('pay_assignation')->distinct()->get(['assignation']);
        // $assignations = $data->distinct()->get(['assignation']);

        // $echeances = Echeance::where('type','retraite')->first()->retraites->paginate(10);
         $echeance = Echeance::find($id)->first();
        // $echeance = Echeance::all();
        // foreach ($echeance as $user) {
        //     $user->example = '<a href="/user/' . AppHelper::getDateFormat($user->created_at) . '">' . $user->mois . '</a>';
        // }

        // $assignation = $data->distinct()->get(['assignation']);

        //  dd($echeance);
        return view('paye.retraite.index', compact('assignations','echeance'));
    }

    // app/Http/Controllers/ProductController.php
    public function retraiteFilter(Request $request)
    {
        dd($request->all());

    }
    public function getAll()
    {
        $data = Echeance::where('type','retraite')->first()->retraites;
        // $subCategories = Category::where('parent_id', $input)->get(['id', 'name']);
        return response()->json($data);
    }
    public function getAss(Request $request)
    {
        // dd($request->all());
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
