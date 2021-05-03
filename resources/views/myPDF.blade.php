<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de compra</title>
    <!-- Styles -->
    <style>
        .general{
            margin: auto;
            width: 100%;
            height: 100%;
        }
        .cabecera
        {
            margin-bottom: 0cm;
            width: 100%;
            height: 1.2cm;
        }
        h1{
            
            color: #0070C0;
            float: right;
            margin-left: 1cm;
        }
        img
        {
            float:left;
        }
        h3
        {
            color: rgb(100, 149,237);
            float: right;
        }

        .division2
        {
            margin-top: .6cm;
            background-color:#0070C0;
            width: 100%;
            height: .8cm;
        }
        .styledivfont
        {
            margin-top: 0cm;
            color: white;
            font-size:.7cm;
        }
        .edivizq
        {
            float:left;
        }
        .edivder
        {
            float: right;
        }
        .stylepcab{
            background-color: white;
            border-color: #0070C0;
            border: solid;
            margin-left: .3cm;
            margin-top: 0cm;
            color: black;
            font-size:.4cm;
            height: .7cm;
            width: 3cm;
            text-align: center;
        }
        .stylepdatos
        {
            display: inline-block;
            background-color: white;
            margin: 0;
            color: black;
            font-size:.4cm;
            margin-left: .3cm;
            margin-right: 0;
            height: .4cm;
            width: 3.2cms;
        }
        .datosEmpContenedor{
            float: left;
            height: 2.7cm;
            width: 6cms;
        }
        .pdatos{
            font-size: .4cm;
            margin:0;
        }
        .alineacionderecha{
            text-align: right;
        }

    </style>

</head>
    <body>
        {{-- <h1>Contenido de medicamentos Pharmaplus</h1>
        <ol>
        @foreach ($productos as $producto)
            <li><p> Nombre: {{ $producto->nombre_producto }} </p>
            <p> Descripcion: {{ $producto->descripcion_producto }} </p>
            <p> Precio al publico: {{$producto->precio_producto}} </p>
            <p> Stock: {{$producto->stock_producto}}</p></li>
        @endforeach
        </ol> --}}

        <div>
            {{-- Cabecera principal --}}
            <div class="cabecera">
                <div>
                    <h1>Orden de Compra</h1>
                </div>
                <div>
                    <img src="{{ public_path('img/LogoAe.jpg') }}" alt="AeSol" style="height: 1.5cm; width: 1.2cm; margin-left: 1cm">
                </div>
                <div>
                    <h3>AE SOLUTIONS <br> 
                        Automation & Energy Solutions</h3>
                </div>
            </div>

            {{-- Primer Division Folio --}}
            <div>
                <div class="division2">
                    <div>
                        <p class="styledivfont edivizq"><strong>Datos de facturacion</strong></p>
                    </div>
                    <div>
                        <p class="stylepcab edivder" style="margin-right: .1cm;">Foliopredef000</p> {{-- Ingreso Contenido --}}
                    </div>
                    <div>
                        <p class="styledivfont edivder">OCC Folio</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>

            {{-- Segunda Division Nombre Empresa --}}
            <div style="height: 2.7cm;  ">
                <div class="datosEmpContenedor" style="width: 10cm; ">
                    <p class="pdatos">AE-SOL  S.A. DE C.V.</p>
                    <p class="pdatos">Circuito San Miguel #145, Col. San Francisco de los Pozos</p>
                    <p class="pdatos">San Luis Potosí, S.L.P., C.P. 78421</p>
                    <p class="pdatos">(444) 3.53.27.87</p>
                    <p class="pdatos">RFC: AES120903M16</p>
                </div>

                {{-- Ingreso datos --}}
                <div class="edivder" style="height: 2.7cm; margin-top:0.03cm ">
                    <p class="stylepdatos">Fecha</p><br>
                    <p class="stylepdatos">Cotizacion Ref</p><br>
                    <p class="stylepdatos">01/01/2000</p><br>
                    <p class="stylepdatos">5</p><br>
                    <p class="stylepdatos">FechaReq</p>
                </div>
                <div class=" edivder" style="height: 2.7cm; ">
                    <p class="pdatos">FECHA DE EMISIÓN: </p>
                    <p class="pdatos">COTIZACIÓN DE REFERENCIA: </p>
                    <p class="pdatos">FECHA DE REFERENCIA: </p>
                    <p class="pdatos">CUENTA CARGO: </p>
                    <p class="pdatos">FECHA REQUERIDA: </p>
                </div>
            </div>

            {{-- Tercer Division --}}
            <div class="division2" style="margin-top:.07cm;">
                <div class="edivizq" style="border-style: 0 solid 0 0; height: .7cm; width: 50%">
                    <p class="styledivfont" >Proveedor / Seller</p>
                </div>
                <div class="edivder">
                    <p class="styledivfont " style="padding: 0 3cm 0 0" >Envie a / Ship to</p> 
                </div>
            </div>
                {{-- Ingreso datos --}}
            <div style="height: 2.7cm; width: 100%">
                <div class="edivizq" style="height:2.7cm ; width: 50% ; ">
                    <p class="pdatos" style="margin-left:.2cm">Nombre</p>
                    <p class="pdatos" style="margin-left:.2cm">Nombre2</p>
                    <p class="pdatos" style="margin-left:.2cm">Direccion</p>
                    <p class="pdatos" style="margin-left:.2cm">Direccion</p>
                    <p class="pdatos" style="margin-left:.2cm">Telefono</p>
                </div>
                <div style="height:2.7cm ; width: 50% ; border-style: 0 solid 0 0;">
                    <p class="pdatos" style="margin-left:.2cm">Nombre</p>
                    <p class="pdatos" style="margin-left:.2cm">Nombre2</p>
                    <p class="pdatos" style="margin-left:.2cm">Direccion</p>
                    <p class="pdatos" style="margin-left:.2cm">Direccion</p>
                    <p class="pdatos" style="margin-left:.2cm">Telefono</p>
                </div>
            </div>

            {{-- Cuarta Division Tipo de moneda--}}
            <div style="height: 1cm; width: 100%;">
                <table width="100%" cellspacing="0">
                    <tr class="division2 styledivfont" style="font-size: .4cm">
                        <th>EMBARCAR VÍA</th>
                        <th>REQUISITAR</th>
                        <th>MONEDA</th>   
                        <th>TERMINOS DE PAGO</th> 
                    </tr>
                    <tr style="height: .6cm">
                        <td align="center" style="border-style: ridge; border-width: thin;">Texto</td>
                        <td align="center" style="border-style: ridge; border-width: thin;">Texto</td>
                        <td align="center" style="border-style: ridge; border-width: thin;">Texto</td>
                        <td align="center" style="border-style: ridge; border-width: thin;">Texto</td>
                    </tr>
                </table>
            </div>

            {{-- Quinta Division Productos--}}
            <div style="height: 8cm; width: 100%; border-style: ridge ; border-width: thin; margin-top: .1cm">
                <table width="100%" cellspacing="0">
                    <tr class="division2 styledivfont" style="font-size: .4cm">
                        <th>ITEM</th>
                        <th>CODIGO</th>
                        <th>DESCRIPCION</th>
                        <th>CANT</th>
                        <th>p/u</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td align="center">Texto</td>
                        <td align="center">Texto</td>
                        <td align="center">Texto</td>
                        <td align="center">Texto</td>
                        <td align="center">Texto</td>
                        <td align="center">Texto</td>
                    </tr>
                </table>
            </div>
            <div class="edivder">
                <table>
                    <tr>
                        <th align="right">SUBTOTAL</th>
                        <td align="right" style="width:2cm;">$Texto</td>
                    </tr>
                    <tr>
                        <th align="right">IMPUESTO</th>
                        <td align="right" style="">$Texto</td>
                    </tr>
                    <tr>
                        <th align="right">OTRO</th>
                        <td align="right" style="">$Texto</td>
                    </tr>
                    <tr>
                        <th align="right">TOTAL</th>
                        <td align="right" style="">$Texto</td>
                    </tr>
                </table>
            </div>


            {{-- Sexta Division Comentarios--}}
            <div class="edivizq" style="width: 65%; height: 4cm; margin-top:.7cm; border: solid; border-width: thin;">
                <div>
                    <p class="styledivfont" style="font-size: .4cm, height: .7cm; background-color:#0070C0">Comentarios o instrucciones especiales/ Special Comments</p>
                    <p style="font-size: .4cm">Este es un texto largo que va en observaciones, los productos enviados no corresponden a la compra</p>
                </div>
                <div>
                    <p class="styledivfont" style="font-size: .4cm, height: .7cm; background-color:#0070C0"><strong>AUTORIZÓ /AUTHORIZED</strong></p>
                    <p style="font-size: .4cm">Este es un texto largo que va en observaciones, los productos enviados no corresponden a la compra</p>
                </div>
            </div>

            {{-- Septima Division Notas--}}
            <div style="height: 3.5cm; width: 100%; margin-top: 5cm; border-width: thin;">
                <p style="font-size: .4cm; margin: 0; text-indent: 1cm"><strong>Notas Adicionales: </strong></p>
                <p style="font-size: .4cm; margin: 0; text-indent: 3.5cm">Consulte con su comprador la política y términos de compra.</p>
                <p style="font-size: .4cm; margin: 0; text-indent: 3.5cm">Se requiere aviso de aceptación de la presente orden de compra.
                </p>
                <p style="font-size: .4cm; margin: 0; text-indent: 3.5cm">El surtir los productos o servicios supone la aceptación de los términos de compra.</p>
                <p style="font-size: .4cm; margin: 0; text-indent: 1cm"><strong>Comprador: </strong></p>
                <p style="font-size: .4cm; margin: 0; text-indent: 3.5cm">Si usted tiene alguna pregunta sobre esta orden de compra, por favor, póngase en contacto con</p>
                <p style="font-size: .4cm; margin: 0; text-indent: 3.5cm">Arturo Arévalo, Tel: (444) 3.53.27.87, Mail: arturo.arevalo@ae-sol.net</p>
            </div>
        </div>
    </body>
</html>