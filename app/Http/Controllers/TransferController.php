<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Dept;
use App\Models\Doc;
use App\Models\Employee;
use App\Models\Transfer;
use App\Models\User;
use App\Notifications\TransfertDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransferController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->doc_id);
        $retard_flag = 0;
        $user_notified = User::where('dept_id', $request->to_dept)->get();
        $from_dept = Dept::find(Auth::user()->dept->id);
        $from_dept_name = $from_dept->name;
        $from_mail = Auth::user()->email;
        $from_user_name = Auth::user()->name;
        $to_dept = Dept::find($request->to_dept);
        $to_dept_name = $to_dept->name;
        $doc = Doc::find($request->doc_id);
        $no_dossier = $doc->no_dossier;
        //dd($doc);
        $last_trans = Transfer::latest()->first();
        $deadline = Deadline::where('dept_id', Auth::user()->dept->id)->value('name');

        //dd($last_trans);
        if ($last_trans == null) {

            $current_date = now();
            $diff = $current_date->diffInDays($doc->created_at);
            if ($diff > $deadline) {
                $retard_flag = 1;
            }

            $trans = new Transfer();
            $trans->employee_id = $request->employee_id;
            $trans->type = $request->type;
            $trans->from_dept = Auth::user()->dept->id;
            $trans->to_dept = $request->to_dept;
            $trans->note = $request->note;
            $trans->doc_id = $request->doc_id;
            $trans->user_id = Auth::user()->id;
            $trans->status = '0';
            $trans->flag_retard = $retard_flag;
            $trans->save();
            $trans_last_id = $trans->id;

            $doc->transfer_id = $trans_last_id;
            $doc->save();
            //dd($to_dept_name);

            Alert::success('Tranfert reçu', 'Le document à été transfré au departement '.$to_dept_name);
            $user_notified->each->notify(new TransfertDoc($to_dept_name, $from_dept_name, $from_mail, $from_user_name, $no_dossier));

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
                    $trans->flag_retard = $retard_flag;
                    $trans->save();
                    $trans_last_id = $trans->id;

                    $doc->transfer_id = $trans_last_id;
                    $doc->save();

                    $last_trans->read_at = now();
                    $last_trans->save();

                    $this_trans = Transfer::find($trans_last_id);
                    $current_date = now();
                    $diff = $this_trans->created_at->diffInDays($last_trans->created_at);
                    if ($diff > $deadline) {
                        $retard_flag = 1;
                    }
                    $this_trans->flag_retard = $retard_flag;
                    $this_trans->save();
                    Alert::success('Tranfert reçu', 'Le document à été transfré au departement '.$to_dept_name);
                    $user_notified->each->notify(new TransfertDoc($to_dept_name, $from_dept_name, $from_mail, $from_user_name, $no_dossier));

                    return redirect(route($request->route));
                } else {

                    if ((int) $request->doc_id == $last_trans->doc_id) {

                        $current_date = now();
                        $diff = $current_date->diffInDays($last_trans->created_at);
                        if ($diff > $deadline) {
                            $retard_flag = 1;
                        }

                        dd($last_trans);
                        $trans = new Transfer();
                        $trans->employee_id = $request->employee_id;
                        $trans->type = $request->type;
                        $trans->from_dept = Auth::user()->dept->id;
                        $trans->to_dept = $request->to_dept;
                        $trans->note = $request->note;
                        $trans->doc_id = $request->doc_id;
                        $trans->user_id = Auth::user()->id;
                        $trans->status = '0';
                        $trans->flag_retard = $retard_flag;
                        $trans->save();
                        $trans_last_id = $trans->id;

                        $doc->transfer_id = $trans_last_id;
                        $doc->save();

                        $last_trans->read_at = now();
                        $last_trans->status = 1;
                        $last_trans->save();

                        Alert::success('Tranfert reçu', 'Le document à été transfré au departement '.$to_dept_name);
                        $user_notified->each->notify(new TransfertDoc($to_dept_name, $from_dept_name, $from_mail, $from_user_name, $no_dossier));

                        return redirect(route($request->route));
                    } else {
                        $current_date = now();
                        $diff = $current_date->diffInDays($doc->created_at);
                        if ($diff > $deadline) {
                            $retard_flag = 1;
                        }

                        $trans = new Transfer();
                        $trans->employee_id = $request->employee_id;
                        $trans->type = $request->type;
                        $trans->from_dept = Auth::user()->dept->id;
                        $trans->to_dept = $request->to_dept;
                        $trans->note = $request->note;
                        $trans->doc_id = $request->doc_id;
                        $trans->user_id = Auth::user()->id;
                        $trans->status = '0';
                        $trans->flag_retard = $retard_flag;
                        $trans->save();
                        $trans_last_id = $trans->id;

                        $doc->transfer_id = $trans_last_id;
                        $doc->save();
                        //dd($to_dept_name);

                        Alert::success('Tranfert reçu', 'Le document à été transfré au departement '.$to_dept_name);

                        $user_notified->each->notify(new TransfertDoc($to_dept_name, $from_dept_name, $from_mail, $from_user_name, $no_dossier));

                        return redirect(route($request->route));
                    }

                }
            }
        }

    }

    public function Tracking($id)
    {
        $track = Transfer::where('doc_id', $id)->get();
        if (count($track) == 0) {
            Alert::warning('Etat Initial', 'Le document est à état initial veillez transféréz le dossier svp ');

            return redirect()->back();
        } else {
            $last_doc = Transfer::where('doc_id', $id)->latest()->first();
            $emp = Employee::find($last_doc->employee_id);

            return view('tracking.index', compact('track', 'emp', 'last_doc'));
        }

    }

    public function UserTracking($id)
    {
        dd($id);

        return view('tracking.user');
    }

    public function ReadMessage($id)
    {
        $notification = DB::table('notifications')->find($id);
        $user = User::find($notification->notifiable_id);
        $user->unreadNotifications()->update(['read_at' => now()]);
        // dd(json_encode($notification->data->from_user_name));
        Alert::success('Notification Lu', ' ');

        return redirect()->back();
    }
}
