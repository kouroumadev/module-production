<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Dept;
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

            return redirect()->intended(route('home'));
        }

        return to_route('login')->withErrors([
            'message'=> 'Incorrect email adresse ou mot de passe',
        ])->onlyInput('email');
    }

    public function Registration(){
        $depts = Dept::all();
        return view('registration', compact('depts'));
    }

    public function SignUp(Request $request){

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

    public function Logout(){
        Auth::logout();
        return to_route('login');
    }
}
