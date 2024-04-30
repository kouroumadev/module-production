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
    public static function getPercentage($value, $percentage) {
        // Convert the percentage to a decimal
        $percentageInDecimal = (int)$percentage / 100;

        // Calculate 40% of the number
        $result = $percentageInDecimal * (int)$value;
        return $result;
    }

    public static function getMontMensPens($total_ssc_final,$total_mois,$annuite,$added_mon) {
        return self::getMoneyFormat((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100) ;
    }
    public static function getPensTrim($total_ssc_final,$total_mois,$annuite,$added_mon) {
        return self::getMoneyFormat((((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100)*12)/4) ;
    }
    public static function getMontAnnuPens($total_ssc_final,$total_mois,$annuite,$added_mon) {
        return self::getMoneyFormat((((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100)*12)) ;
    }

}
