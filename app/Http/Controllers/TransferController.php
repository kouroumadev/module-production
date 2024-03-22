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

use function PHPUnit\Framework\isEmpty;

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
        $last_trans = Transfer::latest()->first();
        //dd($last_trans);
        if ($last_trans == null) {

            $trans = new Transfer();
            $trans->employee_id = $request->employee_id;
            $trans->type = $request->type;
            $trans->from_dept = Auth::user()->dept->id;
            $trans->to_dept = $request->to_dept;
            $trans->note = $request->note;
            $trans->doc_id = $request->doc_id;
            $trans->user_id = Auth::user()->id;
            $trans->status = '0';
            $trans->save(); 
            $trans_last_id = $trans->id;

                    
            $doc->transfer_id = $trans_last_id;
            $doc->save();
                //dd($to_dept_name);
                   // Notification::send($user, new TrackingNotification($to_dept_name,$from_dept_name));       Alert::success('Document Transferé avec success', '');
            return redirect(route($request->route));
        } else {
            if ($request->to_dept == Auth::user()->dept->id) {

              Alert::error('Incorrect Departement', '');
              return redirect()->back();
            } else {
                if ($last_trans->to_dept == Auth::user()->dept->id) {
                    $old = Transfer::find($last_trans->id);
                    $old->status = 1;
                    $old->save();
                    //dd($old);
                    $trans = new Transfer();
                    $trans->employee_id = $request->employee_id;
                    $trans->type = $request->type;
                    $trans->from_dept = Auth::user()->dept->id;
                    $trans->to_dept = $request->to_dept;
                    $trans->note = $request->note;
                    $trans->doc_id = $request->doc_id;
                    $trans->user_id = Auth::user()->id;
                    $trans->status = '0';
                    $trans->save(); 
                    $trans_last_id = $trans->id;

                            
                    $doc->transfer_id = $trans_last_id;
                    $doc->save();

                    $dep = Dept::find($request->to_dept);
                    Alert::success('Tranfert reçu', "Le document à été transfré au departement ".$dep->name);  
                    return redirect(route($request->route));
                  } else {
                    // $old = Transfer::find($last_trans->id);
                    // $old->status = 1;
                    // $old->save();
                    //dd($old);
                    $trans = new Transfer();
                    $trans->employee_id = $request->employee_id;
                    $trans->type = $request->type;
                    $trans->from_dept = Auth::user()->dept->id;
                    $trans->to_dept = $request->to_dept;
                    $trans->note = $request->note;
                    $trans->doc_id = $request->doc_id;
                    $trans->user_id = Auth::user()->id;
                    $trans->status = '0';
                    $trans->save(); 
                    $trans_last_id = $trans->id;
                            
                    $doc->transfer_id = $trans_last_id;
                    $doc->save();

                    $dep = Dept::find($request->to_dept);
                    Alert::success('Tranfert reçu', "Le document à été transfré au departement ".$dep->name);  
                    return redirect(route($request->route));
                  }
            }
        }
        
       
        
        

    }

    public function Tracking($id){
        
        $track = Transfer::where('doc_id', $id)->get();
       // dd(Transfer::where('doc_id', $id)->get());
        return view('tracking.index',compact('track'));
    }
}
