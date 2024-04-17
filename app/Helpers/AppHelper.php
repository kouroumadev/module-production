<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class AppHelper {


    public static function getUserName($id) {
        return User::findOrFail($id)->value('name');
    }
    public static function getMoneyFormat($val) {
        return number_format((int)$val,0,""," ");
    }
    public static function getDateFormat($val) {
        return \Carbon\Carbon::parse($val)->format('d-m-Y');
    }
    public static function getPrefectureName($id) {
        return DB::table('prefecture')->where('code', $id)->value('libelle');
    }
    public static function getCommuneName($id) {
        return DB::table('communes')->where('id', $id)->value('libelle');
    }
    public static function getBrancheName($id) {
        return DB::table('branche')->where('code', $id)->value('libelle');
    }

}
