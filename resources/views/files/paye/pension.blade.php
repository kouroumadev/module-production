<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etat Payment</title>

    <style>
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            margin-left: 30px;
        }

        main {
            position: relative;
            top: 30px !important;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            display: flex !important;
        }

        .detail table {
            margin-top: 10px;
            width: 100%;
            font-size: 11px;
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

<body style="font-family: 'Poppins',sans-serif">
    <header>
        <div style="width: 100%; position: relative; top:10; left:10; font-size: 11px;">
            <img src="{{ public_path('flagui.png') }}" width="1020" height="10">
        </div>
        <table style="width: 100%;margin-bottom:10px">
            <tbody>
                <tr style="margin-top: 0 !important">

                    <td>
                        <img src="{{ public_path('LOgo-CNSS.png') }}" width="200" height="100">

                    </td>
                    <td>
                        <span style=""> REPUBLIQUE DE GUINEE</span>


                        <div style="margin-left: 30px; font-size:12px">
                            Travail-Justice-Solidarite </div><br>

                    </td>
                    <td>
                        {!! DNS2D::getBarcodeHTML('098765432133', 'QRCODE', 3, 3) !!}

                    </td>

                </tr>
            </tbody>
        </table>
    </header>

    <main>

        <h2 style="text-align: center"> SERVICE DES PENSION</h2>

        <div style="font-family: cursive; text-align:center">ETAT DE PAYEMENT DES PENSIONS DE <span class="text-uppercase">{{ $type }}</span> <strong>
                BEYLA</strong></div>

        <div
            style="width: 70%; margin:auto; font-size:10px; text-align:center; padding:1px; margin-top:30px; margin-bottom:5px; background-color:rgb(49, 191, 49)">
            <h1>ECHEANCE - {{ $echeance_date }}</h1>
        </div>

        <table class="detail" style="border-collapse: collapse; font-size: 12px; margin-top:25">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Num <span class="text-capitalize">{{ $type }}</span></th>
                    <th>Date Naiss</th>
                    <th>Date Jouiss</th>
                    @if ($type == "reversion")
                    <th>Ayant Cause</th>
                    @endif
                    <th>Societe Ori</th>
                    <th>Mnt Trim Reval</th>
                    <th>Mnt Mens Reval</th>
                    <th>Mens du</th>
                    <th>Mnt arriérés</th>
                    <th>Mnt à payer</th>
                    <th>Mnt avance</th>
                    <th>Pour</th>
                    <th>Observation</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $tot_montant_trim = 0;
                    $tot_montant_mens_reval = 0;
                    $tot_trim_du = 0;
                    $tot_montant_arriere = 0;
                    $tot_montant_a_paye = 0;
                    $tot_montant_avance = 0;
                    $tot_pour = 0;
                @endphp
                @foreach ($retraites as $ret)
                <tr>
                    @php
                        $tot_montant_trim += (int)$ret->montant_trim;
                        $tot_montant_mens_reval += (int)$ret->montant_mens_reval;
                        $tot_trim_du += (int)$ret->trim_du*4;
                        $tot_montant_arriere += (int)$ret->montant_arriere;
                        $tot_montant_a_paye += (int)$ret->montant_a_paye;
                        $tot_montant_avance += (int)$ret->montant_avance;
                        $tot_pour += (int)$ret->pour;
                    @endphp
                    <td>{{ $loop->index+1 }} </td>
                    <td>{{ $ret->prenoms }} </td>
                    <td>{{ $ret->nom }} </td>
                    <td>{{ $ret->type }} </td>
                    <td>{{ $ret->num_retraite }} </td>
                    <td>{{ \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y') }} </td>
                    <td>{{ \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y') }} </td>
                    @if ($type == "reversion")
                    <td>{{ $ret->ayant_causse }}</td>
                    @endif
                    <td>{{ $ret->aociéte_orig }} </td>
                    <td>{{ number_format((int)$ret->montant_trim,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->montant_mens_reval,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->trim_du*4,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->montant_arriere,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->montant_a_paye,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->montant_avance,0,""," ") }} GNF</td>
                    <td>{{ number_format((int)$ret->pour,0,""," ") }} GNF</td>
                    <td>-</td>
                </tr>
                @endforeach



            </tbody>
            <tfoot>
                <th colspan="8"> Tautaux</th>
                <th>{{ number_format($tot_montant_trim,0,""," ") }} GNF</th>
                <th>{{ number_format($tot_montant_mens_reval,0,""," ") }} GNF</th>
                <th>{{ number_format($tot_trim_du,0,""," ") }}</th>
                <th>{{ number_format($tot_montant_arriere,0,""," ") }} GNF</th>
                <th>{{ number_format($tot_montant_a_paye,0,""," ") }} GNF</th>
                <th>{{ number_format($tot_montant_avance,0,""," ") }} GNF</th>
                <th>{{ number_format($tot_pour,0,""," ") }}</th>
                <th>-</th>
            </tfoot>
        </table>

        <table style="width: 100%">
            <tbody>
                <tr>
                    <td>
                        <div style="text-align: left; margin-top:10px; font-size: 12px;">
                            <br>
                            <h4> Le Chef d'agence:</h4>
                            <span>LAMINE SYLLA</span>
                        </div>
                    </td>
                    <td>
                        <div style="text-align: right; margin-top:10px; font-size: 12px;">
                            Conakry {{ $date }} <br>
                            <h4> Le Chef service des Pensions:</h4>
                            <span>MOHAMED LAMINE CONTE</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <div style="position: relative; left:15">
            <img src="{{ public_path('branding.png') }}" width="100" height="70">

        </div>
        <div style="text-align: center;font-size: 12px; position: relative; bottom:40">
            <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
            <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP
                138</span> <br>
            <span>République de Guinée | www.cnss.gov.gn</span>
        </div>
    </footer>





</body>

</html>
