<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class TransferController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        // $from_dept = Auth::user()->dept->id;
        // dd($request->all(),$from_dept);

        $trans = new Transfer();
        $trans->employee_id = $request->employee_id;
        $trans->type = $request->type;
        $trans->from_dept = Auth::user()->dept->id;
        $trans->to_dept = $request->to_dept;
        $trans->note = $request->note;
        $trans->status = '0';
        $trans->save();

        Alert::success('Document Transferer avec success', '');
        return redirect(route($request->route));

    }
}
