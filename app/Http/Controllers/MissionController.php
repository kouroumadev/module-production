<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    public function index(Request $request)
    {

        return view('mission.index');
    }

    public function MissionAssureInfo(Request $request)
    {
        $no_immat = $request->no_immatriculation;
        $employe = DB::connection('metier')->table('employe')->where('no_employe', '=', $no_immat)->get();
        $conjoints = DB::connection('metier')->table('conjoint')->where('no_employe', '=', $no_immat)->get();
        $no_employeur = $employe[0]->no_employeur;
        $employeur = DB::connection('metier')->table('employeur')->where('no_employeur', '=', $no_employeur)->get();
        $employeDeails = [];

        $data = [];

        foreach ($conjoints as $value) {

            $enfants = DB::connection('metier')->table('enfant')->where('no_conjoint', $value->no_conjoint)->get();
            $items = [

                'enfants' => $enfants,
                'conjoint_name' => $value->nom,
                'conjoint_prenom' => $value->prenoms,
                'no_conjoint' => $value->no_conjoint,
                'date_mariage' => $value->date_mariage,
                'date_naissance' => $value->date_naissance,
                'lieu_naissance' => $value->lieu_naissance,

            ];

            array_push($employeDeails, $items);
        }

        $data['employeDetails'] = $employeDeails;
        $data['employe'] = $employe;
        $data['employeur'] = $employeur;
        //dd($data['employeDetails']);

        return view('mission.assure-info', ['data' => $data]);
    }
}
