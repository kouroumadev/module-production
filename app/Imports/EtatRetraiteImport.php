<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
// use RetraiteSheetImport;


class EtatRetraiteImport implements WithMultipleSheets, SkipsUnknownSheets
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function sheets(): array
    {
        return [
            '0' => new RetraiteSheetImport($this->data),
        ];
    }

    public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }
}
