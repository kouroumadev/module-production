<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Paie</title>
</head>
<body style="font-family: 'Poppins',sans-serif">
    <div style="width: 100%;margin-bottom:10px;  margin:auto">
        <table style="width: 100%;margin-bottom:10px">
            <tbody>
               <tr style="margin-top: 0 !important">

                   <td>
                    <img src="{{ public_path('LOgo-CNSS.png') }}" width="200" height="100">

                    </td>
                   <td>
                      <span style="position: relative; top:10; left:-15"> REPUBLIQUE DE GUINEE</span>


                        <div style="margin-left: 10px;position: relative; top:15; font-size:12px"> Travail-Justice-Solidarite </div><br>

                   </td>
                   <td>
                    {!! DNS2D::getBarcodeHTML($no_imma, 'QRCODE',3,3) !!}

                    </td>

               </tr>
            </tbody>
        </table>
        <h3 style="text-align: center; ">PENSION DE RETRAITE</h3>
        <h1 style="text-align: center; ">FICHE DE PAIE</h1>
        <h2 style="text-align: center; "> <span style="color: red"> N° </span> </h2>
        <h2 style="text-align: center; ">ASSIGNATION</h2>
        <h4 style="text-align: center; ">BOKÉ</h4>




        <div style="width: 100%;  position:absolute; top:220; left:20">


            <span>
                <img src="{{ storage_path('app/public/pensionnaireImg/'.$photo) }}" style="width:100px; height:100px;" alt="" srcset="">

            </span>

        </div>
         <table style="width: 100%; margin-top:10px">
            <tbody>

               <tr>
                <table style="margin-top: 10px">
                    <tbody>
                        <tr>
                            <th style="width: 30%; text-align:left; font-size: 13px">PRENOMS:</th>
                            <td style="font-size: 13px">{{ $prenom }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">NOM:</th>
                            <td style="font-size: 13px">{{ $nom }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">Retraité(e) le:</th>
                            <td style=" font-weight:bold;font-size: 13px"> {{$date_end_job}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">DERNIER EMPLOYEUR:</th>
                            <td style="font-size: 13px; color: red;">{{ $employer }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; text-align:left; font-size: 13px">MONTANT TRIMESTRIEL:</th>
                            <td style="font-size: 13px">{{ $mont_trimestre }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">MONTANT TRIMESTRIEL REVALORISÉ:</th>
                            <td style="font-size: 13px">{{ $mont_trimestre_revalorise }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">MONTANT AF:</th>
                            <td style=" font-weight:bold;font-size: 13px">{{ $mont_AF }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; font-size: 13px; text-align:left">MONTANT TOTAL PENSION:</th>
                            <td style="font-size: 13px; color: red;">{{ $mont_total_pension }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%; text-align:left; font-size: 13px">DATE DE JOUISSANCE:</th>
                            <td style="font-size: 13px; color: red;"></td>
                        </tr>


                    </tbody>

                </table>
               </tr>

            </tbody>

        </table>


            <h3 style="text-align: center; position: relative; left:10">ENFANTS A CHARGE</h3>
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
                    @php
                            $i=1;
                        @endphp

                        @foreach ($enfants as $enf)


                        <tr>
                            <td>{{ $i }}</td>
                            <td style="text-align: center">{{ $enf->prenom_enfant }} {{ $enf->nom_enfant }}</td>
                            <td style="text-align: center"> {{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->format('d/m/Y') }}</td>
                            <td style="color: red; text-align: center">{{ \Carbon\Carbon::parse($enf->date_naissance_enfant)->addYears(18)->format('d/m/Y') }}<</td>
                            <td></td>

                        </tr>

                        @php
                            $i++;
                        @endphp
                        @endforeach


                </tbody>
            </table>
            <div style="text-align: right; margin-top:10px">
                Le Chef de Service:

            </div>
            <div style="text-align: left; margin-top:10px">
                Conakry {{$date}}
            </div>
        <div style="position: absolute; bottom:-25">
            <img src="{{ public_path('branding.png') }}" width="100" height="70">
        </div>


            <div style="width: 100%; font-size: 11px; position: absolute; top:-5">
                <img src="{{ public_path('flagui.png') }}" width="700" height="10">
             </div>

         <div style="text-align: center; position: absolute; bottom:-20; left: 150;font-size: 11px;">
            <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
            <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP 138</span> <br>
            <span>République de Guinée | www.cnss.gov.gn</span>
        </div>


</div>
</body>
</html>


