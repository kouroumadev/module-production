<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\User;
use App\Models\Prestation;
use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminController extends Controller
{

    //GESTION DES UTILISATEURS
    public function userIndex() {
        $depts = Dept::all();
        $users = User::all();

        return view('user.index', compact('depts','users'));
    }

    public function userStore(Request $request) {
        // dd($request->all());

        if($request->hasFile('user_photo')){
            $file = $request->file('user_photo')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $tem = explode(".",$request->email);
            $img = $filename."-".time()."-".$tem['0'].".".$extension;

            Storage::disk('userImg')->put($img,file_get_contents($request->file('user_photo')));
        }

        $user = new User();
        $user->dept_id = $request->dept_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->c_password = $request->password;
        $user->photo = $img;

        $user->save();

        Alert::success('Enregistrer', 'Enregistrer avec success');

        return redirect(route('user.index'));
    }

    // END USER MANAGEMENT

    // DEPT MANAGEMENT

    public function deptIndex() {
        $depts = Dept::all();

        return view('dept.index', compact('depts'));
    }
    public function deptStore(Request $request) {
        // dd($request->all());

        $dept = new Dept();
        $dept->name = $request->name;
        // $dept->created_by = Auth::user()->id;
        $dept->save();
        return redirect(route('dept.index'))->with('yes','Enregistrer avec succes');
    }

    //END DEPT MANAGEMENT


    public function docIndex() {
        $prestations = Prestation::all();
        $pieces = Piece::all();

        return view('parametrage.file.index', compact('prestations','pieces'));
    }

    public function docStore(Request $request) {
        //  dd($request->all());

        $piece = new Piece();
        $piece->nom_piece = $request->nom_piece;
        $piece->prestation_id = $request->prestation_id;
        $piece->obligation = $request->obligation;
        $piece->save();
        return redirect(route('doc.index'))->with('yes','Enregistrer avec succes');
    }

    public function PrestIndex() {
        $prestations = Prestation::all();

        return view('parametrage.prestation.index', compact('prestations'));
    }
    public function PrestStore(Request $request) {
        // dd($request->all());

        $prest = new Prestation();
        $prest->nom_prestation = $request->nom_prestation;
        // $dept->created_by = Auth::user()->id;
        $prest->save();
        return redirect(route('prest.index'))->with('yes','Enregistrer avec succes');
    }

    public function PieceIndex() {
        $prestations = Prestation::all();

        return view('parametrage.piece.index', compact('prestations'));
    }
    public function PieceStore(Request $request) {
         //dd($request->all());

        $prest = new Prestation();
        $prest->nom_prestation = $request->nom_prestation;
        // $dept->created_by = Auth::user()->id;
        $prest->save();
        return redirect(route('prest.index'))->with('yes','Enregistrer avec succes');
    }

    public function FicheDecompte()
    {


        $data = [
            'raison_sociale' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'adresse'=>'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie'=>'E+20',
            'date' => date('m/d/Y'),

        ];

        $pdf = PDF::loadView('test.fiche-decompte', $data);
        // $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('fiche-decompte.pdf');
    }

    public function FichePaie()
    {


        $data = [
            'raison_sociale' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'adresse'=>'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie'=>'E+20',
            'date' => date('m/d/Y'),

        ];

        $pdf = PDF::loadView('test.fiche-paie', $data);
        // $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('fiche-paie.pdf');
    }

    public function CarteRetraite()
    {


        $data = [
            'raison_sociale' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'adresse'=>'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie'=>'E+20',
            'date' => date('m/d/Y'),

        ];

        $pdf = PDF::loadView('test.carte-retraite', $data);
        // $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('carte-retraite.pdf');
    }

}
