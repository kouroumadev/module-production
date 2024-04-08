<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Paie</title>
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


        <h4 style="text-align: center; ">PENSION DE RETRAITE</h4>
        <h4 style="text-align: center; ">FICHE DE PAIE</h4>
        <h4 style="text-align: center; "> <span style="color: red"> N° </span> </h4>
        <h4 style="text-align: center; ">ASSIGNATION</h4>
        <h4 style="text-align: center; ">BOKÉ</h4>


        <div style="width: 100%; margin-top:10px;">


            <span>
                <img src="{{ public_path('b.jpg') }}" style="width:100px; height:100px;" alt="" srcset="">

            </span>

        </div>
        {{-- <table style="width: 100%; margin-top:0px">
            <tbody>

                <tr>
                    <table style="margin-top: 10px">
                        <tbody>
                            <tr>
                                <th style=" text-align:left; font-size: 13px">PRENOMS:</th>
                                <td style="font-size: 13px">Ibrahima</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">NOM:</th>
                                <td style="font-size: 13px">Daine</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">Retraité(e) le:</th>
                                <td style=" font-weight:bold;font-size: 13px"> {{ $date }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">DERNIER EMPLOYEUR:</th>
                                <td style="font-size: 13px; color: red;">CAISSE NATIONALE DE SECURITE SOCIALE</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; text-align:left; font-size: 13px">MONTANT TRIMESTRIEL:</th>
                                <td style="font-size: 13px"> 1 650 000 GNF</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">MONTANT TRIMESTRIEL REVALORISÉ:
                                </th>
                                <td style="font-size: 13px">2 345 567 GNF</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">MONTANT AF:</th>
                                <td style=" font-weight:bold;font-size: 13px">100 000 GNF</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; font-size: 13px; text-align:left">MONTANT TOTAL PENSION:</th>
                                <td style="font-size: 13px; color: red;">4 290 345 GNF</td>
                            </tr>
                            <tr>
                                <th style="width: 30%; text-align:left; font-size: 13px">DATE DE JOUISSANCE:</th>
                                <td style="font-size: 13px; color: red;">{{ $date }}</td>
                            </tr>


                        </tbody>

                    </table>
                </tr>

            </tbody>

        </table> --}}
        <table style="width: 100%; margin-top:0px">
            <tbody>
                <tr>
                    <td>
                        <table style="width: 100%; margin-top:0px">
                            <tbody>
                                <tr>
                                    <th style=" text-align:left; font-size: 12px">PRENOMS:</th>
                                    <td style="font-size: 12px">Ibrahima</td>
                                </tr>
                                <tr>
                                    <th style=" font-size: 12px; text-align:left">NOM:</th>
                                    <td style="font-size: 12px">Daine</td>
                                </tr>
                                <tr>
                                    <th style=" font-size: 12px; text-align:left">Retraité(e) le:</th>
                                    <td style=" font-weight:bold;font-size: 12px"> {{ $date }}</td>
                                </tr>
                                <tr>
                                    <th style=" font-size: 12px; text-align:left">DERNIER EMPLOYEUR:</th>
                                    <td style="font-size: 12px; color: red;">CAISSE NATIONALE DE SECURITE SOCIALE</td>
                                </tr>
                                <tr>
                                    <th style=" text-align:left; font-size: 12px">MONTANT TRIMESTRIEL:</th>
                                    <td style="font-size: 12px"> 1 650 000 GNF</td>
                                </tr>

                            </tbody>

                        </table>
                    </td>
                    <td style="">
                        <table style="width: 100%; margin-top:0px; position: relative;">
                            <tbody>

                                <tr>
                                    <th style="font-size: 12px; text-align:left">MONTANT TRIMESTRIEL
                                        REVALORISÉ:
                                    </th>
                                    <td style="font-size: 12px">2 345 567 GNF</td>
                                </tr>
                                <tr>
                                    <th style=" font-size: 12px; text-align:left">MONTANT AF:</th>
                                    <td style=" font-weight:bold;font-size: 12px">100 000 GNF</td>
                                </tr>
                                <tr>
                                    <th style=" font-size: 12px; text-align:left">MONTANT TOTAL PENSION:</th>
                                    <td style="font-size: 12px; color: red;">4 290 345 GNF</td>
                                </tr>
                                <tr>
                                    <th style=" text-align:left; font-size: 12px">DATE DE JOUISSANCE:</th>
                                    <td style="font-size: 12px; color: red;">{{ $date }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </td>
                </tr>
            </tbody>

        </table>

        <h3 style="text-align: center;">ENFANTS A CHARGE</h3>

        <table style="width: 100%">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Prenom et Nom</th>
                    <th>Date de naissance</th>
                    <th>Expiration du Droit</th>
                    <th>Observation</th>

                </tr>
            </thead>
            <tbody>
                {{-- @php
                        $i=1;
                    @endphp

                    @foreach ($enfants as $enf) --}}


                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                        <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                        <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}</td>
                        <td></td> --}}
                    <td>1</td>
                    <td style="text-align: center">FATOUMATA TRAORE</td>
                    <td style="text-align: center"> 13.05.1999</td>
                    <td style="color: red; text-align: center">13.05.1999</td>
                    <td></td>
                </tr>

                {{-- @php
                        $i++;
                    @endphp
                    @endforeach --}}



            </tbody>
        </table>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td>
                        <div style="text-align: left; margin-top:10px; font-size: 12px;">
                            <br>
                            <h4> Le Chef de Service::</h4>
                            <span>MOHAMED LAMINE CONTE</span>
                        </div>
                    </td>
                    <td>
                        <div style="text-align: right; margin-top:10px; font-size: 12px;">
                            Conakry {{ $date }} <br>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- <div style="text-align: right; margin-top:10px">
            Le Chef de Service:

        </div>
        <div style="text-align: left; margin-top:10px">
            Conakry {{ $date }}
        </div> --}}
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



    </div>
</body>

</html>
