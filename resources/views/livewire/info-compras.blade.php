<div>
    {{-- The whole world belongs to you. --}}
        <div class="ml-8 mt-3">
            @php
                $cuenta=0;
                $cuentaEsp=0;
                $cuentaProv=0;
                $cuentaFolio=0;
                $contadorOProv=0;
            @endphp
            @foreach($comprasCurr as $compra)
            @php
                $cuenta=$cuenta+$compra->p_total_c_imp;
            @endphp
            @endforeach
            @foreach($comprasCurrEsp as $compra2)
            @php
                $cuentaEsp=$cuentaEsp+$compra2->p_total_c_imp;
            @endphp
            @endforeach
            
            <h1 class="text-4xl">Gasto de ordenes de compra v&aacute;lidadas</h1>
            <div class="mt-8 mb-4">
                <div>
                    <label>
                        Gasto del:
                    </label>
                    <select id="fechaComp" name="fechaComp" wire:model="fechaComp" class="w-28 rounded-lg h-7 p-1" required>
                            <option value="1" ><p>D&iacute;a</p></option>
                            <option value="2" ><p>Semana</p></option>
                            <option value="3" ><p>Mes</p></option>
                            <option value="4" ><p>A&ntilde;o</p></option>
                    </select>
                    <p>Desde: {{$dateStart}} hasta: {{$dateEnd}} se ha gastado ${{number_format($cuenta,2,'.',',')}}</p>
                </div>
                <br>
                <hr class="w-3/4">
                <div class="mt-8">
                    <label>
                        Seleccione una fecha de inicio:
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaIni" name="fechaIni" min="2018-01-01" max="2031-12-31" wire:model="fechaIni">
                    <label>
                        fecha de término: 
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaEnd" name="fechaEnd" min="2018-01-01" max="2031-12-31" wire:model="fechaEnd">
                    <p>Gasto total del rango de fechas: ${{number_format($cuentaEsp,2,'.',',')}}</p>
                </div>
                <br>
                <hr class="w-3/4">
                <div class="mt-8">
                    <label>
                        Ordenes de proveedor
                    </label>
                    @php
                        $repeatedprov=1;
                    @endphp
                    <select   id="provComp" name="provComp" wire:model="provComp" class="w-64 rounded-lg h-7 p-1" required>
                        @foreach ($provCompras as $provCompra)
                        @foreach ($relprovs as $relprov)
                        @if ($repeatedprov==$relprov->id)
                        @else
                            @if ($provCompra->prov_prod==$relprov->id)
                            @php
                                $repeatedprov=$relprov->id;
                            @endphp
                                <option value="{{$repeatedprov}}" ><p>{{$relprov->nombre_prov}}</p></option>
                            @endif
                        @endif
                        @endforeach
                        @endforeach
                    </select>
                    <label>
                        De: 
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaIni2" name="fechaIni2" min="2018-01-01" max="2031-12-31" wire:model="fechaIni2">
                    <label>
                        Al: 
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaEnd2" name="fechaEnd2" min="2018-01-01" max="2031-12-31" wire:model="fechaEnd2">
                    @foreach ($comprasProvs as $comprasProv)
                        @php
                            $cuentaProv=$cuentaProv+$comprasProv->p_total_c_imp;
                            $contadorOProv++;
                        @endphp
                    @endforeach
                    <p>Se ha gastado: $ {{number_format($cuentaProv,2,'.',',')}} en {{$contadorOProv}} ordenes de compra del proveedor. Desde: {{$fechaIni2}} a {{$fechaEnd2}}</p>
                </div>
                <br>
                <hr class="w-3/4">
                <div class="mt-8">
                    <div class="inline-block">
                        <div class="mr-8"> 
                            <p>Se muestra una lista de 15 elementos, en la parte inferior se muestra el precio
                                total de los productos listados, incluido el impuesto, en la pagina numero 2 se mostrara otra lista con el resto de elementos
                                y el precio de la totalidad de la lista 2. Si desea mostrar todos los resultados, modifique el valor de coincidencias al valor de los resultados mostrados en la parte inferior.
                                Para imprimir el archivo en Excel con el total de las compras, gasto en impuestos, total sin impuesto, presione el boton de Exportar XLXS
                            </p>
                        </div>
                        <br>
                        <label>Buscar por folio</label>
                        <input type="text" wire:model="search" class="w-32 rounded-lg h-7 p-1">
                        <label>Mostrar: </label>
                        <input type="text" wire:model="coincidences" class="w-32 rounded-lg h-7 p-1" placeholder="# Numero">
                        <label>Coincidencias </label>
                        <div class="float-right mr-8">
                        <button wire:click="entregado()" class="bg-blue-500 hover:bg-blue-700 text-white rounded px-1"><a>entregados</a></button>
                        <button wire:click="pendiente()" class="bg-yellow-500 hover:bg-yellow-700 text-white rounded px-1"><a>pendientes</a></button>
                        <button wire:click="cancelado()" class="bg-red-500 hover:bg-red-700 text-white rounded px-1"><a>cancelados</a></button>
                        </div>
                        <br>
                        <br>
                        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
                            <thead>
                                <tr class="text-left border-b border-gray-300">
                                    <td class="px-4 py-3">Folio</td>
                                    <td class="px-4 py-3">Descripcion</td>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($compraFolios as $compraFolio)
                                @php
                                    $cuentaFolio=$cuentaFolio+$compraFolio->p_total_c_imp;
                                @endphp
                                <tr class="bg-gray-700 border-b border-gray-600">
                                    <td class="px-4 py-3">{{$compraFolio->foliocompra}}</td>
                                    <td class="px-4 py-3">{{$compraFolio->desc_orden}}</td>
                                    @if ($compraFolio->status->estado=='entregado')
                                    @php
                                        $newVariableDate1=strtotime($compraFolio->status->fecha);
                                        $newVariableDate2=strtotime($compraFolio->fecha_req);
                                        if ($newVariableDate1>=$newVariableDate2) {
                                            $difDate=$newVariableDate1-$newVariableDate2;
                                            $leyenda='dias despues';
                                        }
                                        else
                                        {
                                            $difDate=$newVariableDate2-$newVariableDate1;
                                            $leyenda='dias antes';
                                        }
                                    @endphp
                                    <td class="px-4 py-3">Se entreg&oacute; {{$difDate/(60*60*24)}} {{$leyenda}}</td>
                                    @else
                                        @if ($compraFolio->status->estado=='cancelado' && $compraFolio->status->fecha!=null)
                                         @php
                                          $fechaCancelado=date("d-m-Y",strtotime($compraFolio->status->fecha));   
                                         @endphp
                                        <td class="px-4 py-3">Se cancel&oacute; el dia {{$fechaCancelado}}</td>
                                        @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="inline-block">
                        <br><br>
                        <p>Total: ${{number_format($cuentaFolio,2,'.',',')}}</p>
                        <button class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  wire:click="export()">
                            Exportar XLXS
                        </button>
                    </div>
                    
                        @if ($compraFolios)
                            {{$compraFolios->links()}}
                        @endif
                    
                </div>
            </div>
            
        </div>
</div>
