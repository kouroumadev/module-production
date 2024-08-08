<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Dept;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //GESTION DES UTILISATEURS
    public function userIndex()
    {
        $depts = Dept::all();
        $users = User::all();

        return view('user.index', compact('depts', 'users'));
    }

    public function userStore(Request $request)
    {
        // dd($request->all());
        $password = Str::password(8, true, true, false, false, false);
        //dd($password);
        if ($request->hasFile('user_photo')) {
            $file = $request->file('user_photo')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $tem = explode('.', $request->email);
            $img =
                $filename . '-' . time() . '-' . $tem['0'] . '.' . $extension;

            Storage::disk('userImg')->put(
                $img,
                file_get_contents($request->file('user_photo'))
            );
        }

        $user = new User();
        $user->dept_id = $request->dept_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->c_password = $password;
        $user->photo = $img;

        $user->save();

        Alert::success('Enregistrer', 'Enregistrer avec success');

        return redirect(route('user.index'));
    }

    public function userReset($id)
    {
        $password = Str::password(8, true, true, false, false, false);
        //dd($id);
        $user = User::find($id);
        $user->password = Hash::make($password);
        $user->c_password = $password;
        $user->is_first = 1;
        $user->save();

        Alert::success('Reinitialiser', 'Le mot de passe à été réinitialisé');

        return redirect(route('user.index'));
    }

    public function userSuspended($id)
    {
        $user = User::find($id);

        if ($user->status == 1) {
            $user->status = 0;
            $user->save();

            Alert::success('Suspension', 'Ce compte à été suspendu');

            return redirect(route('user.index'));
        } else {
            $user->status = 1;
            $user->save();

            Alert::success('Activation', 'Ce compte à été Activé');

            return redirect(route('user.index'));
        }
    }

    // END USER MANAGEMENT

    // DEPT MANAGEMENT

    public function deptIndex()
    {
        $depts = Dept::all();

        return view('dept.index', compact('depts'));
    }

    public function deptStore(Request $request)
    {
        // dd($request->all());

        $dept = new Dept();
        $dept->name = $request->name;
        // $dept->created_by = Auth::user()->id;
        $dept->save();

        return redirect(route('dept.index'))->with(
            'yes',
            'Enregistrer avec succes'
        );
    }

    //END DEPT MANAGEMENT

    public function FicheDecompte()
    {
        $data = [
            'raison_sociale' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'adresse' => 'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie' => 'E+20',
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
            'adresse' => 'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie' => 'E+20',
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
            'adresse' => 'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie' => 'E+20',
            'date' => date('m/d/Y'),
        ];

        $pdf = PDF::loadView('test.carte-retraite', $data);

        // $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('carte-retraite.pdf');
    }

    public function EtatPayement()
    {
        $data = [
            'raison_sociale' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'adresse' => 'Kaloum',
            'date_immatriculation' => date('m/d/Y'),
            'no_immatriculation' => '129876543890',
            'categorie' => 'E+20',
            'date' => date('m/d/Y'),
        ];

        $pdf = PDF::loadView('test.etat-payment', $data);
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('etat-payment.pdf');
    }
}
