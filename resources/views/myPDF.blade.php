<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de compra</title>
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- Styles -->
    <style>
        @font-face{
            font-family: fontpredef;
            src: url({{ storage_path('/fonts/Roboto.ttf') }}) format("truetype");
        }
        
        .general{
            margin: auto;
            width: 100%;
            height: 100%;
        }
        .cabecera
        {
            margin-bottom: 0cm;
            width: 100%;
            height: 2cm;
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
            background-color:#0070C0;
            width: 100%;
            height: .9cm;
        }
        .styledivfont
        {
            font-family: fontpredef;
            margin-top: 0cm;
            color: white;
            font-size:.65cm;
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
            font-size:.35cm;
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
            font-size:.39cm;
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
            
            font-size: .39cm;
            margin:0;
        }
        .pdatos2{
            font-size: .35cm;
            margin:0;
        }
        .pdatos3{
            margin:0;
            font-size: .33cm;
        }
        .alineacionderecha{
            text-align: right;
        }
        p
        {
            font-family: fontpredef;
            margin: 0;
        }
        td{
            font-family: fontpredef;
            font-size: .4cm;
        }
        .font{
            font-family: fontpredef;
        }
        .footer
        {
            font-size: .34cm;
            margin: 0;
            text-indent: 3.5cm;
        }

        .encabezados
        {
            font-size: .6cm;
            color: white; 
            margin-top:0px; 
            width: 50%;
            margin-bottom: .3 cm;
        }
        .header{
            position: fixed;
            top: 0cm;
        }
        .footer2{
            position: fixed;
            left: 0;
            bottom: 9cm;
             width: 100%;
        }

        .contenido{
            height: 8.1cm;
            bottom: 9cm;
            top: 10.2cm;
            position: absolute;
            
        }
        .page-break
        {
            page-break-after: always;
        }
        .page-break:last-child{
            page-break-after: never;
        }
      
    }
    </style>

</head>
    <body>

        <div class="header">
            {{-- Cabecera principal --}}
            <div class="cabecera" >
                <div>
                    <h1 class="font">Orden de Compra</h1>
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
            <div width="100%"  style="height: .85cm; border: ridge ; border-width: thin;">
                <div class="division2">
                    <div>
                        <p class="styledivfont edivizq"><strong>Datos de facturacion</strong></p>
                    </div>
                    <div>
                        <p class="stylepcab edivder" style="margin-right: .1cm;">{{$compra->foliocompra}}</p> 
                    </div>
                    <div>
                        <p class="styledivfont edivder ">OCC Folio</p>
                    </div>
                    <div style="clear: both;"></div> 
                </div> 
            </div>

            {{-- Segunda Division Nombre Empresa --}}
            <div style="height: 2.6cm; width: 100%; border: ridge; border-width: thin">
                <div style="height: 2.6cm;  ">
                    <div class="datosEmpContenedor" style="width: 50%; height:2.6cm ; margin-top:0.03cm; margin-left: .2cm ">
                        <p class="pdatos">AE-SOL  S.A. DE C.V.</p>
                        <p class="pdatos">I. Zaragoza #151, Col. Cuartel Aguilares</p>
                        <p class="pdatos">San Luis Potosí, S.L.P., C.P. 78421</p>
                        <p class="pdatos">(444) 3.53.27.87</p>
                        <p class="pdatos">RFC: AES120903M16</p>
                    </div>
    
                    {{-- Ingreso datos --}}
                    <div class="edivder" style="height: 2.7cm; width: 3.1cm;">
                        @php
                            $newfecha_req = date("d/m/Y", strtotime($compra->fecha_req));
                            $newfecha_emision = date("d/m/Y", strtotime($compra->fecha_emision));
                            $newfecha_ref = date("d/m/Y", strtotime($compra->fecha_ref));
                        @endphp
                        <p class="stylepdatos" align="center" style="width: 2.7cm">{{$newfecha_emision}}</p><br>
                        <p class="stylepdatos" align="center" style="width: 2.7cm">{{$compra->cot_ref}}</p><br>
                        <p class="stylepdatos" align="center" style="width: 2.7cm">{{$newfecha_ref}}</p><br>
                        <p class="stylepdatos" align="center" style="width: 2.7cm">{{$compra->cuenta_cargo}}</p><br>
                        <p class="stylepdatos" align="center" style="width: 2.7cm">{{$newfecha_req}}</p>
                    </div>
                    <div class=" edivder" style="height: 2.4cm; width: 6cm; ">
                        <p  class="pdatos3" align="right" >FECHA DE EMISIÓN: </p>
                        <p  class="pdatos3" align="right">COTIZACIÓN DE REFERENCIA: </p>
                        <p  class="pdatos3" align="right">FECHA DE REFERENCIA: </p>
                        <p  class="pdatos3" align="right">CUENTA CARGO: </p>
                        <p  class="pdatos3" align="right">FECHA REQUERIDA: </p>
                    </div>
                </div>
            </div>
            

            {{-- Tercer Division --}}
            <div class="division2" style="border: thin" >
                <div>
                    <div class="edivizq" style="height: .7cm; width: 15cm; margin-top:0;  ">
                        <p align="center" class="encabezados"  >Envie a / Ship to</p>
                    </div>
                </div>
                <div>
                    <div class="edivder" style="height: .8cm; width: 15cm;" >
                        <p class="encabezados"  >Proveedor / Seller </p> 
                    </div> 
                </div>
                <div></div>
                <br class="clearBoth" />
            </div>
                {{-- Ingreso datos --}}
            <div style="height: 2.6cm; width: 100%;">
                <div class="edivder" style="height:2.6cm ; width: 50%; margin-right: 0cm; border: ridge; border-width: thin; ">
                    {{-- <p class="pdatos" style="margin-left: .2cm">{{$envio->nombre}}</p>
                    <p class="pdatos" style="margin-left: .2cm">{{$envio->nombre_enc}}</p> --}}
                    <div style=" padding-top: .5cm, padding-left: .2cm; padding-right: .2cm; padding-bottom: .5cm">
                        <center>
                            <p class="pdatos" style="margin-left: .2cm">{{$envio->nombre}}</p>
                            <p class="pdatos" style="margin-left: .2cm">{{$envio->dir_envio}}, {{$envio->loc_envio}}</p>
                            <p class="pdatos" style="margin-left: .2cm">C.P: {{$envio->cp_envio}}, {{$envio->edo_envio}}</p>
                        </center>
                    </div>
                    
                    {{-- <p class="pdatos" style="margin-left: .2cm">{{$envio->telefono_envio}}</p> --}}
                </div>
                <div class="edivizq" style="height:2.65cm ; width: 50% ; border: ridge; border-width: thin;">
                    @foreach ($proveedor as $item)
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->nombre_prov}}</p>
                    @if ($item->razon_social)
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->razon_social}} </p>
                    @endif
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->nombre_prov_suc}} 
                        @if ($item->RFC!=null)
                        ,RFC: {{$item->RFC}}
                        @endif
                    </p>
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->dir_prov}}</p>
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->loc_prov}}, {{$item->edo_prov}} 
                        @if ($item->cp_prov!=null)
                            ,CP: {{$item->cp_prov}}
                        @endif
                        </p>
                    <p class="pdatos3" style="margin-left:.2cm">{{$item->telefono_prov}}</p>
                    @endforeach
                </div>
            </div>

            {{-- Cuarta Division Tipo de moneda--}}
            <div style="height: 1.2cm; width: 100%; border: ridge; border-width: thin; ">
                <table width="100%" height="100%" cellspacing="0">
                    <tr class="division2 styledivfont" style="font-size: .4cm;">
                        <th>EMBARCAR VÍA</th>
                        <th>REQUISITAR</th>
                        <th>MONEDA</th>   
                        <th>TERMINOS DE PAGO</th> 
                    </tr>
                    <tr>
                        <td align="center" style=" border: ridge; border-width: thin; ">{{$compra->embarc}}</td>
                        <td align="center" style=" border: ridge; border-width: thin; ">{{$compra->requisita}}</td>
                        <td align="center" style=" border: ridge; border-width: thin; ">{{$compra->t_moneda}}</td>
                        <td align="center" style=" border: ridge; border-width: thin; ">{{$compra->met_pago}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="footer2" >
            <div class="edivder" >
                <table>
                    <tr>
                        <th align="right">SUBTOTAL</th>
                        <td align="right" style="width:2cm;">${{$compra->precio_total}}</td>

                    <tr>
                        <th align="right">IMPUESTO</th>
                        <td align="right" style="">${{$compra->impuesto}}</td>
                    </tr>
                    <tr>
                        <th align="right">OTRO</th>
                        <td align="right" >${{$compra->descuento}}</td>
                    </tr>
                    <tr>
                        <th align="right">TOTAL</th>
                        <td align="right" style="">${{$compra->p_total_c_imp}}</td>
                    </tr>
                </table>
            </div>


            {{-- Sexta Division Comentarios--}}
            <div class="edivizq" style="width: 65%;  margin-top:.7cm; border: solid; border-width: thin;">
                <div style="height: 3cm; ">
                    <p class="styledivfont" style="font-size: .4cm, height: .4cm; background-color:#0070C0;">Comentarios o instrucciones especiales/ Special Comments</p>
                    <p style="font-size: .4cm; margin-left:.5cm; height: 1.3cm; ">{{$compra->comentarios}}</p>
               
                    <p class="styledivfont" style="font-size: .4cm, height: .4cm; background-color:#0070C0; "><strong>AUTORIZÓ /AUTHORIZED</strong></p>
                    <p style="font-size: .4cm; margin-left:.5cm; margin-top:0px; height: .6cm;  ">Ing. Arturo Arévalo Escobar</p>
                </div>
            </div>

            {{-- Septima Division Notas--}}
            <div style="height: 3.5cm; width: 100%; margin-top: 4.4cm; border-width: thin;">
                <p class="footer"><strong>Notas Adicionales: </strong></p>
                <p class="footer">Consulte con su comprador la política y términos de compra.</p>
                <p class="footer">Se requiere aviso de aceptación de la presente orden de compra.
                </p>
                <p class="footer">El surtir los productos o servicios supone la aceptación de los términos de compra.</p>
                <p class="footer"><strong>Comprador: </strong></p>
                <p class="footer">Si usted tiene alguna pregunta sobre esta orden de compra, por favor, póngase en contacto con</p>
                <p class="footer">Arturo Arévalo, Tel: (444) 3.53.27.87, Mail: arturo.arevalo@ae-sol.net</p>
            </div>
        </div>

        <div class="contenido" >
            {{-- Quinta Division Productos--}}
            @php
                $contador=0;
            @endphp
            @foreach ($comprasproductocoll as $comprasproducto)
                <div class="page-break" style="height: 8.1cm; width: 100%; border: ridge ; border-width: thin; ">
                    <table width="100%" cellspacing="0">
                        <tr class="division2 styledivfont" style="font-size: .4cm">
                            <th>ITEM</th>
                            <th>C&Oacute;DIGO</th>
                            <th>DESCRIPCION</th>
                            <th>CANT</th>
                            <th>P/U</th>
                            <th>TOTAL</th>
                        </tr>
                        
                            @php
                                $totales=0;
                            @endphp
                            @foreach ($comprasproducto as $item2)
                            @if ($item2->precio>0)
                            <tr>
                                @php
                                $var1=$item2->cantidad;
                                $itemprecio=$item2->precio;
                                $var2=number_format($itemprecio,2);
                                $var3=$var1*$itemprecio; 
                                $var4=number_format($var3,2);
                                @endphp
                            <td align="center">{{$contador=$contador+1}}</td>
                            <td align="center">{{$item2->codigo}}</td>
                            <td align="center">{{$item2->nombre}}</td>
                            <td align="center">{{$item2->cantidad}}{{$item2->medida}}</td>
                            <td align="center">${{$var2}}</td>
                            <td align="center">${{$var4}}</td>
                                @php
                                    $totales=$totales+$var3;   
                                    $totales1=number_format($totales,2); 
                                @endphp
                            </tr>
                            @endif
                            @if ($item2->precio<0)
                            <tr>
                                @php
                                $var1=$item2->cantidad;
                                $itemprecio=$item2->precio;
                                $var2=number_format($itemprecio,2);
                                $var3=$var1*$itemprecio; 
                                $var4=number_format($var3,2);
                                @endphp
                            <td align="center">{{$contador=$contador+1}}</td>
                            <td align="center">{{$item2->codigo}}</td>
                            <td align="center">{{$item2->nombre}}</td>
                            <td align="center">{{$item2->cantidad}}{{$item2->medida}}</td>
                            <td align="center">${{$var2}}</td>
                            <td align="center">${{$var4}}</td>
                            </tr>
                            @endif
                            
                            @endforeach
                    </table>
                </div>
            @endforeach        
        </div>             
        


        
        
    </body>
</html>