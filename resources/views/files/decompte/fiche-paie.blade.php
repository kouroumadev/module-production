<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carte Retraite</title>
</head>
<body style="font-family: 'Poppins',sans-serif">
    <div style="width: 100%;margin-bottom:10px;  margin:auto">


    <table style="width:100%; position:absolute; top:-40; left:20">
        <tbody>
           <tr style="margin-top: 0 !important">

               <td>
                <img src="{{ public_path('LOgo-CNSS.png') }}" width="200" height="100">

                </td>
               <td>
                  <span style="position: relative; top:20; font-size:15px;"> REPUBLIQUE DE GUINEE</span>

                   <div style="width:75%; margin-left:0px;position: relative; top:20">
                     <table style="width: 80%; position: relative; left:5">
                        <tr>
                            <td style="background-color: red; width:55%; height:2px"></td>
                            <td style="background-color: yellow; width:55%"></td>
                            <td style="background-color: green; width:55%"></td>
                        </tr>
                     </table>
                  </div>
                    <div style="margin-left: 20px;position: relative; top: 20 "> <span style="font-size:11px;">Travail-Justice-Solidarite</span></div><br><br>

               </td>
           </tr>
           <tr>
                <h3 style="text-align: center; position: relative; left:80">PENSION DE RETRAITE</h3>
                <h1 style="text-align: center; position: relative; left:80">FICHE DE PAIE</h1>
                <h2 style="text-align: center; position: relative; left:80"> <span style="color: red"> N° 01-508780 </span> </h2>
                <h2 style="text-align: center; position: relative; left:80">ASSIGNATION</h2>
                
                <ol style="position: relative; left:150">
                    <li>BOKÉ</li>
                </ol>

            </tr>
        </tbody>
    </table>
           


             
         <table style="width: 100%; position:absolute; top:250">
            <tbody>
               <tr style="margin-top: 0 !important">
    
                  <td>
                    <img src="{{ storage_path('app/public/pensionnaireImg/'.$photo) }}" style="width:100px; height:100px; margin-left:300px" alt="" srcset="">
                    </td>
    
               </tr>
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
               <tr>
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
                        <tr>
                            <td>1</td>
                            <td style="text-align: center">Fatou Camara</td>
                            <td style="text-align: center"> {{$date}}</td>
                            <td style="color: red; text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center"> {{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center"> {{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">  {{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Fatou Camara</td>
                            <td style="text-align: center">{{$date}}</td>
                            <td style="color: red;text-align: center">{{$date}}<</td>
                            <td> </td>
    
                        </tr>
                    </tbody>
                </table>
               </tr>
            </tbody>
    
        </table>

        
            <div style="position: relative; top: 80">
                {!! DNS2D::getBarcodeHTML($no_imma, 'QRCODE',5,5) !!}
            </div>
 

        <div style="position:absolute; bottom:2">
            <div style="width: 20%; font-size: 11px;position: relative; top:30">
                <img src="{{ public_path('flagui.png') }}" width="100" height="40">
            </div>

            <div style="text-align: center;font-size: 11px; position: relative; left:200">
                <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
                <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP 138</span> <br>
                <span>République de Guinée | www.cnss.gov.gn</span>
            </div>
        </div>

            
</div>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche paie</title>
</head>
<body style="font-family: 'Poppins',sans-serif">

    <table style="width: 70%;margin-bottom:10px; border:1px solid black">
        <tbody>
           <tr style="margin-top: 0 !important">

               <td>
                <img src="{{ public_path('LOgo-CNSS.png') }}" width="200" height="100">

                </td>
               <td>
                  <span style="position: relative; top:20; font-size:12px;"> REPUBLIQUE DE GUINEE</span>

                   <div style="width:%; margin-left:0px;position: relative; top:20">
                     <table style="width: 100%">
                        <tr>
                            <td style="background-color: red; width:85%; height:2px"></td>
                            <td style="background-color: yellow; width:75%"></td>
                            <td style="background-color: green; width:75%"></td>
                        </tr>
                     </table>
                  </div>
                    <div style="margin-left: 20px;position: relative; top: 20 "> <span style="font-size:11px;">Travail-Justice-Solidarite</span></div><br><br>

               </td>
               

           </tr>
           <tr>
                <h3 style="text-align: center; position: relative; left:60">PENSION DE RETRAITE</h3>
                <h1 style="text-align: center; position: relative; left:60">FICHE DE PAIE</h1>
                <h2 style="text-align: center; position: relative; left:60"> <span style="color: red"> N° 01-506780 </span> </h2>
                <h2 style="text-align: center; position: relative; left:60">ASSIGNATION</h2>
                
                <ol>
                    <li>BOKÉ</li>
                </ol>

           </tr>
        </tbody>
        <img src="{{ public_path('cnsslogo2.png') }}" width="300" height="300"
        style=" opacity: 0.1; position:absolute; left: 95px; top:100px;">
    </table>
    <div style="position: relative; top:">
        {!! DNS2D::getBarcodeHTML($no_imma, 'QRCODE',5,5) !!}
    </div>
 <h5>Le Chef de Service:</h5>  <p style="text-align: right; position: relative; right:400">Conakry: {{$date}}</p>
    <table style="width: 50%;margin-bottom:10px; position:absolute; top:0;left:400;border:1px solid black">
        <tbody>
           <tr style="margin-top: 0 !important">

              <td>
                <img src="{{ storage_path('app/public/pensionnaireImg/'.$photo) }}" style="width:100px; height:100px; margin-left:200px" alt="" srcset="">
                </td>

           </tr>
           <tr>
            <table style="margin-top: 20px">
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
           <tr>
            <h3 style="text-align: center; position: relative; left:10">ENFANTS A CHARGE</h3>
            <table>
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
                    <tr>
                        <td>1</td>
                        <td style="text-align: center">Fatou Camara</td>
                        <td style="text-align: center"> {{$date}}</td>
                        <td style="color: red; text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center"> {{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center"> {{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">  {{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Fatou Camara</td>
                        <td style="text-align: center">{{$date}}</td>
                        <td style="color: red;text-align: center">{{$date}}<</td>
                        <td> </td>

                    </tr>
                </tbody>
            </table>
           </tr>
        </tbody>

    </table>

    <div style="width: 20%; font-size: 11px; position: absolute; bottom:-15">
        <img src="{{ public_path('flagui.png') }}" width="100" height="40">
     </div>

 <div style="text-align: center; position: absolute; bottom:-20; left: 300;font-size: 11px;">
    <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
    <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP 138</span> <br>
    <span>République de Guinée | www.cnss.gov.gn</span>
</div>
</body>
</html> --}}
