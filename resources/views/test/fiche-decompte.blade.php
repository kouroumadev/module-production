<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Decompte</title>
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
    </style>
</head>

<body style="font-family: 'Poppins',sans-serif">


    <header>
        <div style="width: 100%; position: relative; top:10; left:10; font-size: 11px;">
            <img src="{{ public_path('flagui.png') }}" width="740" height="10">
        </div>
        <table style="width: 100%;margin-bottom:10px">
            <tbody>
                <tr style="margin-top: 0 !important">

                    <td>
                        <img src="{{ public_path('LOgo-CNSS.png') }}" width="200" height="100">

                    </td>
                    <td>
                        <span style=""> REPUBLIQUE DE GUINEE</span>


                        <div style="margin-left: 30px ; font-size:12px">
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
        <div style="font-family: cursive; text-align:center">DIRECTION DES PRESTATIONS SOCIALES</div>

        <div
            style="width: 70%; margin:auto; font-size:10px; text-align:center; padding:1px; margin-top:30px; background-color:rgb(49, 191, 49)">
            <h1>FICHE DE DECOMPTE</h1>
        </div>

        <div style="width: 100%; margin-top:20px;">


            <span>
                <img src="{{ public_path('b.jpg') }}" style="width:100px; height:100px;" alt="" srcset="">

            </span>
            <span style="text-align: right; position:absolute; right:100 ">
                <h4 style="color: red;">N°01-504587</h4>
            </span>
        </div>

        <table>
            <tbody>
                <tr>
                    <td>
                        <table style="">
                            <tbody>
                                <tr>
                                    <th style="width: 30%; text-align:left; font-size: 12px">PRENOMS:</th>
                                    <td style="font-size: 12px">Issiaga BINTOU MANDIAMA</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">NOM:</th>
                                    <td style="font-size: 12px">Camara</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">N° ASSURE:</th>
                                    <td style="color: red; font-weight:bold;font-size: 12px"> 16120000046899</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">DATE NAISSANCE:</th>
                                    <td style="font-size: 12px"> {{ $date }}</td>
                                </tr>

                            </tbody>

                        </table>
                    </td>
                    <td>
                        <table sstyle="">
                            <tbody>

                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">AGENCE:</th>
                                    <td style="font-size: 12px"> Boké</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">ASSIGNATION:</th>
                                    <td style="font-size: 12px">Boké</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; font-size: 12px; text-align:left">EX EMPLOYÉ:</th>
                                    <td style="font-size: 12px; color: red;">CAISSE NATIONALE DE LA SECURITE SOCIALE
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </td>
                </tr>
            </tbody>






        </table>
        <div style=" margin:auto;  text-align:center; padding:1px; margin-top:10px;">
            <h3>DECOMPTE</h3>
        </div>

        <table style="margin-top: 0px;">
            <tbody>
                <tr>
                    <th style="width: 30%; text-align:left">Salaire de référence:</th>
                    <td>216 000 000 /120 = 1 800 000 par Mois</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Annuités de service:</th>
                    <td>27 ans</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Pourcentage Acquis:</th>
                    <td>27 * 2% = 54%</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Montant Annuel de la Pension:</th>
                    <td>18 000 000 * 12 * 54% = 11 664 000 GNF</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Montant Trimestriel:</th>
                    <td>11 664 000 / 4 = 2 916 000 GNF</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Montant Trimestriel revalorisé:</th>
                    <td>2 916 000 + 40% = 4 082 400 GNF</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Montant de l'Allocation Familiale(AF):</th>
                    <td>9 000 GNF</td>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:left">Montant Total de la Pension:</th>
                    <td>4 082 400 + 9 000(AF) = 4 091 400 GNF</td>
                </tr>
            </tbody>

        </table>
        <p style="text-align: right; margin-top:10px">

            <span style="color: red; font-weight:bold">MONTANT TOTAL: 4 091 400 GNF </span>
        </p>
        <table style="border: 1px solid black; height:0px; width:100%">
            <tbody>
                <tr style="border: 1px solid black; width:100%;">
                    <th style=" width:25%; border-right: 1px solid black;height:160px"> <span
                            style="position: relative; top: -35"> Le Chef de Service </span> </th>
                    <th style=" width:25%; border-right: 1px solid black; text-align:center"> <span
                            style="position: relative; top: -35"> Le Directeur des Prestations Sociale </span> </th>
                    <th style=" width:25%; border-right: 1px solid black; text-align:center"> <span
                            style="position: relative; top: -35"> L'Agent Comptable </span> </th>
                    <th style=" width:25%;"> <span style="position: relative; top: -35"> Le Directeur Générale </span>
                    </th>
                </tr>
            </tbody>
        </table>

        <div style="text-align: right; margin-top:10px">
            Conakry {{ $date }}
        </div>
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
