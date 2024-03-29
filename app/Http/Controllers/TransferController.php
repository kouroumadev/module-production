<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Dept;
use App\Models\Doc;
use App\Models\Employee;
use App\Models\Transfer;
use App\Models\User;
use App\Notifications\TrackingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\TransfertDocNotification;
use function PHPUnit\Framework\isEmpty;
use Notification;
class TransferController extends Controller
{
    public function store(Request $request){
        //dd($request->doc_id);
        $user_notified = User::where('dept_id',$request->to_dept)->get();
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
                $user_notified->each->notify(new TransfertDocNotification());
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
                    $user_notified->each->notify(new TransfertDocNotification());

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
                    $user_notified->each->notify(new TransfertDocNotification());

                    return redirect(route($request->route));
                  }
            }
        }
        
       
        
        

    }

    public function Tracking($id){
        $track = Transfer::where('doc_id', $id)->get();
        if (sizeof($track) == 0) {
            Alert::warning('Etat Initial', "Le document est à état initial veillez transféréz le dossier svp ");
            return redirect()->back();
        } else {
            $last_doc = Transfer::where('doc_id',$id)->latest()->first();
            $emp = Employee::find($last_doc->employee_id);
            
            return view('tracking.index',compact('track','emp','last_doc'));
        }
        
       
    }

    public function UserTracking($id){
        dd($id);

        return view('tracking.user');
    }
}
