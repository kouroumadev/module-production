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

<body style="font-family: 'Poppins',sans-serif; font-size:11px">
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
                        <div style=" position: absolute; left:350; top:30; font-size:12px"> REPUBLIQUE DE
                            GUINEE</div>


                        <div style="margin-left: 0px; position: absolute; left:340; top:45; font-size:12px">
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

        <h2 style="text-align: center; position:relative; top:-10 "> SERVICE DES PENSION</h2>

        <div style=" text-align:center;font-size:12px;position:relative; top:-10">ETAT DE PAYEMENT
            DES PENSIONS DE RETRAITE
            <strong>
                BEYLA
            </strong>
        </div>


        <h4 style="text-align: center">ECHEANCE - AVRIL 2024</h4>


        <table class="detail" style="border-collapse: collapse; font-size: 12px; margin-top:5">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Num Retraite</th>
                    <th>Date Naiss</th>
                    <th>Date Jouiss</th>
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
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Adrian</td>
                    <td>KOUNDOUNO</td>
                    <td>01</td>
                    <td>15292</td>
                    <td>12/05/1980</td>
                    <td>12/05/1980</td>
                    <td>SOTELGUI caisse nation de securite sociale</td>
                    <td>616 000 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0</td>
                    <td>0 GNF</td>
                    <td>451 733 GNF</td>
                    <td>0 GNF</td>
                    <td>0</td>
                    <td>-</td>
                </tr>
            </tbody>
            <tfoot>
                <th colspan="8"> Tautaux</th>
                <th>616 000 GNF</th>
                <th>616 000 GNF</th>
                <th>0</th>
                <th>0 GNF</th>
                <th>451 733 GNF</th>
                <th>0 GNF</th>
                <th>0</th>
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
        <div style="position: relative; left:19; top:5">
            <img src="{{ public_path('branding.png') }}" width="70" height="40">

        </div>
        <div style="text-align: center;font-size: 12px; position: relative; bottom:15">
            <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
            <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP
                138</span> <br>
            <span>République de Guinée | www.cnss.gov.gn</span>
        </div>
    </footer>





</body>

</html>
