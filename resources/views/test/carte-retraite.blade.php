<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carte Retraite</title>
</head>
<body style="font-family: 'Poppins',sans-serif">
    <div style="width: 80%;margin-bottom:10px; border:1px solid black; margin:auto">


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
                        {!! DNS2D::getBarcodeHTML("098765432133", 'QRCODE',3,3) !!}
                        
                        </td>
                       
                   </tr>
                </tbody>
            </table>
            <h1 style="text-align: center; position: relative; left:0">CARTE DE RETRAITE</h1>
                <h2 style="text-align: center; position: relative; left:0"> <span style="color: red"> N° 01-506780 </span> </h2>
           <div>
                {{-- <h3 style="text-align: center; position: relative; left:60">PENSION DE REtdAITE</h3> --}}
                {{-- <h1 style="text-align: center; position: relative; left:0">CARTE DE RETRAITE</h1>
                <h2 style="text-align: center; position: relative; left:0"> <span style="color: red"> N° 01-506780 </span> </h2> --}}

           </div>
           <div style="width: 100%;  ">
        
                
            <span>
                <img src="{{public_path('b.jpg')}}" style="width:100px; height:100px;" alt="" srcset="">

            </span>
            
            </div>


            <table style="margin-top: 20px; width:100%">
                <tbody>
                    <tr>
                        <th style="width: 0%; text-align:left; font-size: 13px">PRENOMS:</th>
                        <td style="font-size: 13px"></td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">NOM:</th>
                        <td style="font-size: 13px"></td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">Né(e) le:</th>
                        <td style=" font-weight:bold;font-size: 13px"> à </td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">DE:</th>
                        <td style="font-size: 13px; ">  </td>
                    </tr>
                    <tr>
                        <th style="width: 0%; text-align:left; font-size: 13px">ET DE:</th>
                        <td style="font-size: 13px"></td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">N° DE PAIEMENT:</th>
                        <td style="font-size: 13px; color: red;">01-5-4587</td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">N° CIN:</th>
                        <td style=" font-weight:bold;font-size: 13px"></td>
                    </tr>
                    <tr>
                        <th style="width: 0%; font-size: 13px; text-align:left">DELIVRÉE LE:</th>
                        <td style="font-size: 13px;"> {{$date}}</td>
                    </tr>
                    <tr>
                        <th style="width: 0%; text-align:left; font-size: 13px">À:</th>
                        <td style="font-size: 13px;"></td>
                    </tr>
                    <tr>
                        <th style="width: 0%; text-align:left; font-size: 13px">DATE DE JOUISSANCE:</th>
                        <td style="font-size: 13px; color: red;"></td>
                    </tr>
                </tbody>
            </table>
            <div style="text-align: right; margin-top:10px">
                Le Chef de Service:
                
            </div>
            <div style="text-align: left; margin-top:10px">
                Conakry {{$date}}
            </div>
        <div style="position: relative; bottom:-15; left:10"> 
            <img src="{{ public_path('branding.png') }}" width="100" height="70">
        </div>


            <div style="width: 100%; font-size: 11px; position: absolute; top:2;">
                <img src="{{ public_path('flagui.png') }}" width="562" height="10">
             </div>
        
         <div style="text-align: center; position: relative; bottom:0; left: 50;font-size: 11px;">
            <span style="text-align: center; font-weight:bold">République de Guinée</span> <br>
            <span style="text-align: center;">Caisse Nationale de sécurité Sociale, Kouléwondy - Kaloum BP 138</span> <br>
            <span>République de Guinée | www.cnss.gov.gn</span>
        </div>   
</div>
</body>
</html>
