<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Dept;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function SignIn(LoginRequest $request)
    {

        $credential = $request->validated();

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $first_log = Auth::user()->is_first;
            $id = Auth::user()->id;
            //dd($first_log);
            if ($first_log == 1) {
                return to_route('charge-first-login');
            } else {
                return redirect()->intended(route('home'));
            }
            
           
        }

        return to_route('login')->withErrors([
            'message' => 'Incorrect email adresse ou mot de passe',
        ])->onlyInput('email');
    }

    public function ChargeFirstLogin(){
        $id = Auth::user()->id;
        return view('first-login', compact('id'));
    }
    
    public function firstLogin(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if (Hash::check($request->password, $user->password)) {
            // Alert::toast('Le nouveau et l\'encien mot de passe ne doivent pas etre identique', 'error');
            // dd('identique');
            return redirect()->back()->withErrors([
                'message' => "Le nouveau et l'encien mot de passe ne doivent pas etre identique'",
            ]);
        } else {
            $request->validate(
                [
                    'password' => ['required', 'confirmed']
                ],
            );

            $user->password = Hash::make($request->password);
            $user->is_first = 0;
            $user->c_password = $request->password;
            $user->save();
            Alert::success('Votre mot de passe a ete change avec Succès', 'success');
            return redirect('/');
        }
        //dd($user);
    }
    public function Registration()
    {
        $depts = Dept::all();
        return view('registration', compact('depts'));
    }

    public function SignUp(Request $request)
    {

        // dd($request->all());

        $user = User::create([
            'dept_id' => $request->dept_id,
            'name' => $request->name,
            'email' => $request->email,
            // 'type_user' => $request->type_user,
            'password' => Hash::make($request->password),
            'c_password' => $request->password,
            'photo' => '',
        ]);

        Alert::success('Enregistrer', 'Enregistrer avec success');
        return redirect('login');
    }

    public function Logout()
    {
        Auth::logout();
        return to_route('home');
    }
}