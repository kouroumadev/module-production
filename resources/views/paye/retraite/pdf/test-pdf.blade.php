<!-- resources/views/document.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        @page {
            margin: 40px;
        }
        header {
            position: fixed;
            /* top: -60px; */
            left: 0;
            right: 0;
            height: 50px;
            text-align: center;
            /* background-color: lightgray; */
        }
       .no-header {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <header>
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
    </header>
    <main>
        <p>Page 1</p>
        <p>Page 2</p>
        <div class="no-header"></div>
        <p>Page 3</p>
    </main>
</body>
</html>
