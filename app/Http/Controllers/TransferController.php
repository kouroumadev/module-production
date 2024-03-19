<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\Doc;
use App\Models\Transfer;
use App\Models\User;
use App\Notifications\TrackingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;


class TransferController extends Controller
{
    public function store(Request $request){
        //dd($request->doc_id);
        $user = User::where('dept_id',$request->to_dept)->get();
        $from_dept = Dept::find(Auth::user()->dept->id);
        $from_dept_name = $from_dept->name;

        $to_dept = Dept::find($request->to_dept);
        $to_dept_name = $to_dept->name;
        $doc = Doc::find($request->doc_id);
         //dd($doc);

        $trans = new Transfer();
        $trans->employee_id = $request->employee_id;
        $trans->type = $request->type;
        $trans->from_dept = Auth::user()->dept->id;
        $trans->to_dept = $request->to_dept;
        $trans->note = $request->note;
        $trans->doc_id = $request->doc_id;
        $trans->status = '0';
        $trans->save(); 
        $trans_last_id = $trans->id;

        
        $doc->transfer_id = $trans_last_id;
        $doc->save();
       // dd($to_dept_name);
        // Notification::send($user, new TrackingNotification($to_dept_name,$from_dept_name))
;       Alert::success('Document Transferé avec success', '');
        return redirect(route($request->route));

    }
}
