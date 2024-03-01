<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class DeptController extends Controller
{
    public function deptIndex() {
        $depts = Dept::all();

        return view('dept.index', compact('depts'));
    }
    public function deptStore(Request $request) {
        // dd($request->all());

        $dept = new Dept();
        $dept->name = $request->name;
        $dept->created_by = Auth::user()->id;
        $dept->save();
        return redirect(route('dept.index'))->with('yes','Enregistrer avec succes');
    }

    public function userIndex() {
        $depts = Dept::all();

        return view('user.index', compact('depts'));
    }

    public function userStore(Request $request) {
        dd($request->all());

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

        return redirect(route('user.index'))->with('yes','Ajouter avec succes');
    }
}
