<?php

namespace App\Http\Controllers;

use App\Models\TempFile;
use Illuminate\Http\Request;

class TempFileController extends Controller
{
   public function TempFile(Request $request){
    $doc = $request->file;
    dd($doc);
    $destination_path = 'public/upload/document';
    $path = $doc->storeAs($destination_path,$uniqueName);
    $fiche = new TempFile();
             $fiche->name = $request->file;

            $fiche->save();
    // dd($file_name);
   }
}
