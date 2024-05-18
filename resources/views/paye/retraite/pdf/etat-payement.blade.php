<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Decompte</title>
    <style type="text/css">
     @page {
            margin: 20px;
        }
        /* @page {
            padding-left: 0;
            padding-right: 0;
            margin-top: 2px;
            margin-bottom: 5px;

            @bottom-center {
                width: 100%; content: element(footer);
            }
        } */

        footer {
           /* margin-top: 100px; */
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            /* display: flex !important; */
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
        </table>
    </div>



    <footer>
        <div style=" border: 1px solid red; ">
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
