<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
                    <div class="row" >
                        <div class="grid col-md-1">
                            <div class="mt-8 ml-6">
                                <a href="{{route('compras.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-1 mt-2">Recargar pagina</a>
                            </div>
                            <div>
                                <form action="{{route('compras.index')}}" method="GET" role="search">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2" type="submit">Buscar por Descripci&oacute;n</button>
                                    <input  class="rounded mt-4 mb-4" type="text" value="" name="desCompra">
                                </form>
                            </div>
                            <div class="text-lg mt-8 ml-6"> <strong> Ordenes en revisión</strong></div>
                            <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10" >
                                <thead>
                                  <tr class="">
                                    <th class="w-1/9">Folio</th>
                                    <th class="w-1/9">Fecha de emision</th>
                                    <th class="w-1/9">Descripcion</th>
                                    <th class="w-1/9">Fecha requerida</th>
                                    <th class="w-1/9">Cuenta cargo</th>
                                    <th class="w-1/9">Metodo de Pago</th>
                                    <th class="w-1/9">Requisitó</th>
                                    <th class="w-1/9">Botones</th>
                                    <th class="w-1/9">Autorizado</th>
                                  </tr>
                                </thead>

                                <tbody class="">
                                    @foreach ($compras as $compra)
                                    @if ($compra->autorizado==false)
                                    <tr class="text-center" >
                                        <td>{{$compra->foliocompra}}</td>
                                        <td>{{$compra->fecha_emision}}</td>
                                        <td>{{$compra->desc_orden}}</td>
                                        <td>{{$compra->fecha_req}}</td>
                                        <td>{{$compra->cuenta_cargo}}</td>
                                        <td>{{$compra->met_pago}}</td>
                                        <td>{{$compra->requisita}}</td>
                                        @php
                                           $contador=0;
                                           $contador2=0;
                                           $errPDF=false;
                                        @endphp
                                        @if (count($productoscompras)==0)
                                            <td><form action="{{route('compras.destroy', $compra)}}" method="POST">
                                                @csrf
                                                @method('delete')
                            
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                      </svg>
                                                </button>
                                                @php
                                                    $errPDF=true;
                                                @endphp
                                            </form></td>
                                        @endif
                                        @foreach ($productoscompras as $productoscompra)
                                        @if (($productoscompra->folio==$compra->foliocompra)&&$contador==0)
                                        <td>
                                             <a href="{{route('compras.edit', $compra)}}" >
                                                <svg class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3 py-0.2  sm:py-1 sm:px-1" style="width: 30px; height: 30px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                  </svg>
                                                </a> 
                                                
                                        </td>
                                        @php
                                            $contador=1;
                                        @endphp
                                        @endif
                                        @if (($productoscompra->folio!=$compra->foliocompra))
                                        @php
                                            $contador2=$contador2+1;
                                        @endphp
                                        @if ($contador2==(count($productoscompras)))
                                        
                                        <td><form action="{{route('compras.destroy', $compra)}}" method="POST">
                                            @csrf
                                            @method('delete')
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>
                                            </button>
                                            @php
                                                $errPDF=true;
                                            @endphp
                                        </form></td>
                                           
                                        @endif
                                        
                                        @endif
                                        
                                        @endforeach
                                    @endif
                                    @if ($compra->autorizado==0&&$errPDF==false)
                                    <td>
                                        @livewire('aprobar-compras', ['compra'=>$compra])
                                    </td>
                                    @endif
                                    
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="h-20 mt-8">
                            <a href="{{route('compras.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-48">Crear Orden de Compra</a>
                        </div>
                        <div class="text-lg mt-8 ml-6"> <strong> Ordenes Aprobadas</strong></div>
                        @livewire('tabla-aprov', ['compras'=>$compras, 'productoscompras'=>$productoscompras])

                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    
</x-app-layout>