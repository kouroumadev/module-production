<!-- resources/views/document.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        @page {
            margin: 40px;
        }
        .foot {
            position: fixed;
            bottom: -60px;
            left: 0;
            right: 0;

        }


        .detail table,
        .detail th,
        .detail td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center !important;
            padding: 2px !important;
        }

    </style>
</head>
<body>
    <main>
        <div>
            <table style="width:100%;margin-bottom:10px;">
                <tbody>
                    <tr style="width:100%;">
                       <td style="width:100%;height: 10px; text-align:left; background-color: red;"></td>
                       <td style="width:100%;height: 10px; text-align:left; background-color: yellow;"></td>
                       <td style="width:100%;height: 10px; text-align:left; background-color: green;"></td>
                    </tr>
                    <tr style="">
                        <td style="width:100%; text-align:left;">
                            <img src="{{ public_path('LOgo-CNSS.png') }}" width="260" height="100"> <br>
                        </td>
                        <td style="width:100%; text-align:center;">
                            <span style="font-weight:bold"> REPUBLIQUE DE GUINEE</span>
                            <div style="margin-left: 10px ; font-size:12px">
                                Travail-Justice-Solidarite
                            </div><br>
                        </td>
                        <td style="width:100%;">
                            <span style="float:right; margin:20px 10px 0 0;"> {!! DNS2D::getBarcodeHTML('098765432133', 'QRCODE', 3, 3) !!}</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:100%;text-align:center;font-weight:bold;font-size:20px">SERVICE DES PENSIONS</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:100%;text-align:center;font-weight:bold;font-size:14px">
                            ETAT DE PAYEMENT DES PENSIONS D'INVALIDITE Boké ville
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:100%;text-align:center;font-weight:bold;font-size:14px">ECHEANCE - MAI 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <table class="detail" style="width:100%; border-collapse: collapse;font-size: 12px">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Num Pension</th>
                        <th>Date Naiss</th>
                        <th>Date Jouiss</th>
                        <th>Societe Ori</th>
                        <th>Mnt Trim Reval (GNF)</th>
                        <th>Mnt Mens Reval (GNF)</th>
                        <th>Mens du</th>
                        <th>Mnt arriérés (GNF)</th>
                        <th>Mnt à payer (GNF)</th>
                        <th>Mnt avance (GNF)</th>
                        <th>Pour</th>
                        <th>Observation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $r)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $r['nom'] }}</td>
                        <td>{{ $r['prenom'] }}</td>
                        <td>{{ $r['type'] }}</td>
                        <td style="font-weight: bold;">{{ $r['num_pension'] }}</td>
                        <td>{{ $r['date_naiss'] }}</td>
                        <td>{{ $r['date_jouis'] }}</td>
                        <td>{{ $r['societe_orig'] }}</td>
                        <td>{{ \AppHelper::getMoneyFormat($r['montant_trim_reval']) }}</td>
                        <td>{{ \AppHelper::getMoneyFormat($r['montant_mens_reval']) }}</td>
                        <td>0</td>
                        <td>{{ \AppHelper::getMoneyFormat($r['montant_arriere']) }}</td>
                        <td>{{ \AppHelper::getMoneyFormat($r['montant_a_payer']) }}</td>
                        <td>{{ \AppHelper::getMoneyFormat($r['montant_avance']) }}</td>
                        <td>{{ $r['remb_pour_nb_periode'] }}</td>
                        <td>{{ $r['observation'] }}</td>

                    </tr>
                    @endforeach

                    {{-- footer starts here --}}
                    <tr style="border: 1px solid white">
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_montant_trim_reval }}</td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_montant_mens_reval }}</td>
                        <td style="border: 1px solid white"></td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_montant_arriere }}</td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_montant_a_payer }}</td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_montant_avance }}</td>
                        <td style="border: 1px solid black;font-weight: bold;">{{ $tot_pour }}</td>
                        <td style="border: 1px solid white"></td>
                    </tr>
                    <tr style="width:100%; border: 1px solid white">
                        <td colspan="16" style="width:100%; text-transform: uppercase;font-weight: bold; font-size: 16px; text-align:center; height: 100px;border: 1px solid white">
                            {{ $money }}
                        </td>
                    </tr>
                    <tr style="">
                        <td colspan="8" style="width:100%;height: 100px;border: 1px solid white"><p style="float:left;">Le chef d'Agence</p></td>
                        <td colspan="8" style="width:100%;height: 100px;border: 1px solid white"><p style="float:right;">Le chef d'service des Pensions</p></td>
                    </tr>
                    <tr style="width:100%">
                        <td colspan="8" style="width:100%; height: 100px;border: 1px solid white"><p style="float:left;">Mohamed Kalla SYLLA</p></td>
                        <td colspan="8" style="width:100%; height: 100px;border: 1px solid white"><p style="float:right;">Mohamed Lamine CONTE</p></td>
                    </tr>
                    {{-- footer ends here --}}
                </tbody>
            </table>
        </div>

        <div class="foot">
            <div>
                <img src="{{ public_path('branding.png') }}" width="100" height="70">
            </div>
            <div style="text-align: center;font-size: 12px; position: relative; bottom:40">
                <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
                <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP
                    138</span> <br>
                <span>République de Guinée | www.cnss.gov.gn</span>
            </div>
        </div>
    </main>

    <script type="text/php">
        if (isset($pdf)) {
            $x = 400;
            $y = 10;
            $text = "Page {PAGE_NUM} / {PAGE_COUNT}";
            $font = null;
            $size = 12;
            $color = array(255,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }
    </script>


</body>
</html>
