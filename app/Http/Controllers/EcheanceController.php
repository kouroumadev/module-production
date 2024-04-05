<?php

namespace App\Http\Controllers;

use App\Imports\RetraitesImport;
use App\Models\Echeance;
use App\Models\Retraite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class EcheanceController extends Controller
{
    public function echeanceIndex() {
        $data = Echeance::all();
        return view('parametrage.echeance.index', compact('data'));
    }
    public function echeanceStore(Request $request) {
        // dd($request->all());

        $this->validate($request,[
            'value'=>'required|unique:echeances,value',
         ]);

        $data = new Echeance();
        $data->value = $request->value;
        $data->created_by = Auth::user()->id;
        $data->save();

        Alert::success('Echeance ajouté avec succès !', '');
        return redirect(route('echeance.index'));

    }

    public function payeStore(Request $request) {
        //  dd($request->all());

        $this->validate($request,[
            'file'=>'required|mimes:xls,xlsx,csv',
            'echeance_id'=>'required',
        ]);

        //  $firstRow = Excel::toArray(new RetraitesImport($request->echeance_id), $request->file('file'))[0][0];


        //  if (count($firstRow) != 20) { // Assuming the file should have 3 columns
        //      Alert::error('Veuillez charger le bon format de fichier !!', '');
        //      return redirect(route('echeance.index'));
        //  }

        Excel::import(new RetraitesImport($request->echeance_id), $request->file('file'));

        Alert::success('Ficher importé avec succès !', '');
        return redirect(route('paye.index'));
    }

    public function payeIndex() {
        $retraites = Retraite::all();
        return view('parametrage.echeance.paye', compact('retraites'));

    }
}
