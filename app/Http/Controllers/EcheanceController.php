<?php

namespace App\Http\Controllers;

use App\Imports\EtatRetraiteImport;
use App\Imports\EtatReversionImport;
use App\Models\Echeance;
use App\Models\EtatRetraite;
use App\Models\EtatReversion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Carbon as SupportCarbon;

// use Knp\Snappy\Pdf;


class EcheanceController extends Controller
{
    public function echeanceIndex() {
        $data = Echeance::all();
        $mois = DB::table('mois')->get();
        $currentYear = Carbon::now()->format('Y');
        $nextYear = Carbon::now()->addYears(1)->format('Y');
        $years = [$currentYear, $nextYear];
        // dd($years);

        return view('parametrage.echeance.index', compact('data', 'mois','years'));
    }
    public function echeanceStore(Request $request) {

        // dd($request->all());
        $year = $request->years;
        // dd($year);
        $val = Echeance::where('mois', $request->mois)->where('annee', $year)->get();
        if(count($val) > 0){
            Alert::error('Cette Echeance existe déja !!', '');
            return redirect(route('echeance.index'));
        }


        $data = new Echeance();
        $data->mois = $request->mois;
        $data->annee = $year;
        $data->created_by = Auth::user()->id;
        $data->save();

        Alert::success('Echeance ajouté avec succès !', '');
        return redirect(route('echeance.index'));

    }

    public function payeStore(Request $request) {
        //    dd($request->all());

        $this->validate($request,[
            'file'=>'required|mimes:xls,xlsx,csv',
            'echeance_id'=>'required',
        ]);

        //  $firstRow = Excel::toArray(new RetraitesImport($request->echeance_id), $request->file('file'))[0][0];


        //  if (count($firstRow) != 20) { // Assuming the file should have 3 columns
        //      Alert::error('Veuillez charger le bon format de fichier !!', '');
        //      return redirect(route('echeance.index'));
        //  }

        $echeance_type = Echeance::where('id',$request->echeance_id)->value("type");
        Echeance::where('id',$request->echeance_id)->update([
            'status' => '0'
        ]);

        // dd($echeance_type);

        if($echeance_type == "retraite")
            Excel::import(new EtatRetraiteImport($request->echeance_id), $request->file('file'));
        else
            Excel::import(new EtatReversionImport($request->echeance_id), $request->file('file'));



        Alert::success('Ficher importé avec succès !', '');
        return redirect(route('paye.index',$request->echeance_id));
    }

    public function payeIndex(int $id) {

        $data1 = Echeance::where('id',$id)->select('type','value')->get();
        // dd($data1[0]->value);
        $title = $data1[0]->value;
        $echeance_type = $data1[0]->type;

        if($echeance_type == "retraite")
            $retraites = EtatRetraite::where('echeance_id', $id)->limit(100)->get();
        else
            $retraites = EtatReversion::where('echeance_id', $id)->limit(100)->get();
        // dd($retraites);
        return view('parametrage.echeance.paye', compact('retraites', 'id','echeance_type','title'));

    }

    // public function exportExcel(int $id)
    // {
    //     $title = Echeance::find($id)->value('value');
    //     // $data = explode(" ", $echeance);

    //     $writer = WriterEntityFactory::createXLSXWriter();

    //     $writer->openToBrowser('echeance-'. $title .'.xlsx');

    //     $row = WriterEntityFactory::createRowFromArray([
    //         'N°',
    //         'Prénoms',
    //         'Nom',
    //         'Type',
    //         'Num Pension',
    //         'Date de naiss',
    //         'Date de jouiss',
    //         'Ayant cause',
    //         'Société orig',
    //         'Mont trim',
    //         'Mont mens reval',
    //         'Mens du',
    //         'Nontant arriérés',
    //         'Nontant à payer',
    //         'Nontant avance',
    //         'Pour',
    //         'Numéro compte',
    //         'Echéance prem virmnt',
    //         'Observation',
    //     ]);
    //     $writer->addRow($row);

    //     $retraites = Retraite::where('echeance_id', $id)->get();
    //     $i=1;

    //     foreach ($retraites as $ret) {
    //         $row = WriterEntityFactory::createRowFromArray([
    //             $i,
    //             $ret->prenoms,
    //             $ret->nom,
    //             $ret->type,
    //             $ret->num_retraite,
    //             \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y'),
    //             \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y'),
    //             'ayant cause',
    //             $ret->aociéte_orig,
    //             number_format((int)$ret->montant_trim,0,""," "),
    //             number_format((int)$ret->montant_mens_reval,0,""," "),
    //             number_format((int)$ret->trim_du,0,""," "),
    //             number_format((int)$ret->montant_arriere,0,""," "),
    //             number_format((int)$ret->montant_a_paye,0,""," "),
    //             number_format((int)$ret->montant_avance,0,""," "),
    //             number_format((int)$ret->pour,0,""," "),
    //             'num compt',
    //             'Echéance',
    //             'Echéance',
    //         ]);
    //         $writer->addRow($row);
    //         $i++;
    //     }

    //     // Close the writer
    //     $writer->close();
    // }


    public function exportExcel(int $id)
    {

        $data = Echeance::where('id',$id)->select('type','value')->get();
        $title = $data[0]->value;
        $type = $data[0]->type;


        // $title = Echeance::find($id)->value('value');
        // $data = explode(" ", $echeance);

        $writer = WriterEntityFactory::createXLSXWriter();

        $writer->openToBrowser($type . '-echeance-' . $title .'.xlsx');

        if($type == "retraite") {
            $row = WriterEntityFactory::createRowFromArray([
                'Prénoms',
                'Nom',
                'Type',
                'Num Retraite',
                'Date de naiss',
                'Date de jouiss',
                'Société orig',
                'Mont trim reval',
                'Mont mens reval',
                'Mens du',
                'Montant arriérés',
                'Montant à payer',
                'Montant avance',
                'Pour',
                'Observation',
            ]);
            $writer->addRow($row);

            $retraites = EtatRetraite::where('echeance_id', $id)->get();

            foreach ($retraites as $ret) {
                $row = WriterEntityFactory::createRowFromArray([
                    $ret->prenoms,
                    $ret->nom,
                    $ret->type,
                    $ret->num_retraite,
                    \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y'),
                    \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y'),
                    $ret->aociéte_orig,
                    number_format((int)$ret->montant_trim,0,""," "),
                    number_format((int)$ret->montant_mens_reval,0,""," "),
                    number_format((int)$ret->trim_du,0,""," "),
                    number_format((int)$ret->montant_arriere,0,""," "),
                    number_format((int)$ret->montant_a_paye,0,""," "),
                    number_format((int)$ret->montant_avance,0,""," "),
                    number_format((int)$ret->pour,0,""," "),
                    '',
                ]);
                $writer->addRow($row);

            }

        } else {

            $row = WriterEntityFactory::createRowFromArray([
                'Prénoms',
                'Nom',
                'Type',
                'Num Retraite',
                'Date de naiss',
                'Date de jouiss',
                'Ayant Cause',
                'Société orig',
                'Mont trim reval',
                'Mont mens reval',
                'Mens du',
                'Montant arriérés',
                'Montant à payer',
                'Montant avance',
                'Pour',
                'Observation',
            ]);
            $writer->addRow($row);

            $retraites = EtatReversion::where('echeance_id', $id)->get();

            foreach ($retraites as $ret) {
                $row = WriterEntityFactory::createRowFromArray([
                    $ret->prenoms,
                    $ret->nom,
                    $ret->type,
                    $ret->num_retraite,
                    \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y'),
                    \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y'),
                    $ret->aociéte_orig,
                    $ret->ayant_causse,
                    number_format((int)$ret->montant_trim,0,""," "),
                    number_format((int)$ret->montant_mens_reval,0,""," "),
                    number_format((int)$ret->trim_du,0,""," "),
                    number_format((int)$ret->montant_arriere,0,""," "),
                    number_format((int)$ret->montant_a_paye,0,""," "),
                    number_format((int)$ret->montant_avance,0,""," "),
                    number_format((int)$ret->pour,0,""," "),
                    '',
                ]);
                $writer->addRow($row);

            }


        }
        // Close the writer
        $writer->close();
    }

    public function exportPdf(int $id) {
        $data1 = Echeance::where('id',$id)->select('type','value')->get();
        // dd($data1[0]->value);
        $title = $data1[0]->value;
        $type = $data1[0]->type;

        if($type == "retraite")
            $retraites = EtatRetraite::where('echeance_id', $id)->limit('200')->get();
        else
            $retraites = EtatReversion::where('echeance_id', $id)->limit('180')->get();


        $data = [
            'date' => date('m/d/Y'),
            'echeance_date' => $title,
            'retraites' => $retraites,
            'type' => $type,
        ];
        //  dd($data);

        //  $pdf = SnappyPdf::loadView('files.paye.pension', $data);
        // // $pdf->setPaper('A4', 'landscape');
        // return $pdf->download('etat-payment.pdf');

         $pdf = PDF::loadView('files.paye.pension', $data);
         $pdf->setPaper('A4', 'landscape');
         return $pdf->stream('etat-payment.pdf');
    }
}
