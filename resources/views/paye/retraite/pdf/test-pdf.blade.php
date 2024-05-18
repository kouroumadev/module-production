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
                    <tr style="border: 1px solid white;">
                        <td style="border: 1px solid white;">1</td>
                        <td style="border: 1px solid white;">Jean Adrian</>
                        <td style="border: 1px solid white;">KOUNDOUNO</>
                        <td style="border: 1px solid white;">01</>
                        <td style="border: 1px solid white;">15292</>
                        <td style="border: 1px solid white;">12/05/1980</>
                        <td style="border: 1px solid white;">12/05/1980</>
                        <td style="border: 1px solid white;">SOTELGUI caisse nation de securite sociale</>
                        <td style="border: 1px solid white;">616 000 GNF</>
                        <td style="border: 1px solid white;">451 733 GNF</>
                        <td style="border: 1px solid white;">0</>
                        <td style="border: 1px solid white;">0 GNF</>
                        <td style="border: 1px solid white;">451 733 GNF</>
                        <td style="border: 1px solid white;">0 GNF</>
                        <td style="border: 1px solid white;">0</>
                        <td style="border: 1px solid white;">-</>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- <div class="foot" style="border: 1px solid red;">
            <div>
                <table style="width:100%">
                    <tr style="width:100%;">
                        <td colspan="2" style="width:100%; text-align: center">
                            LOREM IPSUN DOLLORD SILEKUIR NJRHJRBRJR CENTS FRANCS GUINÉENS
                        </td>
                    </tr>
                    <tr style="width:100%">
                        <td style="width:100%; text-align: left; height: 50px;">Le chef d'Agence</td>
                        <td style="width:100%; text-align: right;height: 50px;">Le chef d'service des Pensions</td>
                    </tr>
                    <tr style="width:100%">
                        <td style="width:100%; text-align: left; height: 100px;">Mohamed Kalla SYLLA</td>
                        <td style="width:100%; text-align: right;height: 100px;">Mohamed Lamine CONTE</td>
                    </tr>
                </table>
            </div>
            <div style=" border: 1px solid red; ">
                <img src="{{ public_path('branding.png') }}" width="100" height="70">
            </div>
            <div style="text-align: center;font-size: 12px; position: relative; bottom:40">
                <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
                <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP
                    138</span> <br>
                <span>République de Guinée | www.cnss.gov.gn</span>
            </div>
        </div> --}}
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
