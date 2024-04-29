<?php

namespace App\Imports;

use App\Models\EtatRetraite;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToArray;

class RetraiteSheetImport implements ToModel, WithHeadingRow, ToArray
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function array(array $rows)
    {
        return $rows;
    }
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EtatRetraite([
            'echeance_id'  => $this->data,
            'num_retraite'  => $row['num_retraite'],
            'prenoms'  => $row['prenoms'],
            'nom'  => $row['nom'],
            'date_de_naiss'  => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_de_naiss'])),
            'date_de_jouiss'  => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_de_jouiss'])),
            'titre'  => $row['titre'],
            'montant_trim'  => $row['montant_trim'],
            'montant_comp'  => $row['montant_comp'],
            'assignation'  => $row['assignation'],
            'assignation1'  => $row['assignation1'],
            'aociéte_orig'  => $row['societe_orig'],
            'type'  => $row['type'],
            'montant_mens_reval'  => $row['montant_mens_reval'],
            'montant_avance'  => $row['montant_avance'],
            'trim_du'  => $row['trim_du'],
            'pour'  => $row['pour'],
            'montant_arriere'  => $row['montant_arriere'],
            'AF'  => $row['af'],
            'montant_a_paye'  => $row['montant_a_paye'],
            'mappr'  => $row['mappr'],
            'created_by'  => Auth::user()->id,
        ]);
    }
}
