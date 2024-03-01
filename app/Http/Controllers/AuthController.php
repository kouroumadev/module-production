<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function SignIn(LoginRequest $request){

        $credential = $request->validated();

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return to_route('login')->withErrors([
            'message'=> 'Incorrect email adresse ou mot de passe',
        ])->onlyInput('email');
    }

    public function Registration(){

        return view('registration');
    }

    public function SignUp(Request $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type_user' => $request->type_user,
            'password' => Hash::make($request->password)
        ]);

        Alert::success(' Enregistrer', '');
        return redirect('login');
    }

    public function Logout(){
        Auth::logout();
        return to_route('login');
    }
}
