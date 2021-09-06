<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >            
                <div class="container">
                    <div class="row" >
                        <div class="grid col-md-1" >
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
                            <div>
                            <table class="w-1/2 sm:w-auto table-fixed bg-white shadow rounded border-b border-gray-200 " cellspacing="10" >
                                <thead class="bg-blue-400 text-white">
                                  <tr class="">
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Folio</th>
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Fecha de emision</th>
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Descripcion</th>
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Fecha requerida</th>
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Cuenta cargo</th>
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Metodo de Pago</th> 
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Requisitó</th> 
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Botones</th>
                                    @can('usuarios')
                                    <th class="overflow-hidden md:overflow-visible w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs sm:text-sm">Autorizado</th>
                                    @endcan
                                  </tr>
                                </thead>

                                <tbody class="text-gray-700">
                                    @foreach ($compras as $compra)
                                    @if ($compra->autorizado==false)
                                    <tr class="text-center" >
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->foliocompra}}</td>
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->fecha_emision}}</td>
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->desc_orden}}</td>
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->fecha_req}}</td>
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->cuenta_cargo}}</td> 
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->met_pago}}</td>
                                        <td class="overflow-hidden md:overflow-visible text-left py-3 px-4 text-xs sm:text-sm">{{$compra->requisita}}</td> 
                                        @php
                                           $contador=0;
                                           $contador2=0;
                                           $errPDF=false;
                                        @endphp
                                        @if (count($productoscompras)==0)
                                            <td class="text-left py-3 px-4 text-xs sm:text-sm"><form action="{{route('compras.destroy', $compra->id)}}" method="POST">
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
                                        <td class="text-left py-3 px-4 text-xs sm:text-sm">
                                            <div class="inline-block">
                                                <a href="{{route('generarPDF', $compra->id)}}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold  rounded py-1 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                                                  </svg>
                                                </a>
                                            </div>
                                            <div class="inline-block" >
                                             <a href="{{route('compras.edit', $compra)}}" >
                                                <svg class="w-7 bg-purple-500 hover:bg-purple-700 text-white font-bold  rounded py-1 px-1"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                  </svg>
                                              </a>
                                            </div>
                                            <div class="inline-block"  >
                                                <form class="destruir" 
                                                action="" 
                                                method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    {{--<button type="submit" style="display: none">
                                                         Boton invisible para enviar el formulario por POST, el boton debajo sirve para enviar los datos a la funcion en js 
                                                    </button>--}}
                                                </form>
                                                <button onclick="destroyFolio({{$compra->id}})" type="submit" class="w-7 bg-red-500 hover:bg-red-700 text-white font-bold  rounded ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                      </svg>
                                                </button>
                                            </div> 
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
                                        
                                        <td class="text-left py-3 px-4 text-xs sm:text-sm"><form action="{{route('compras.destroy', $compra->id)}}" method="POST">
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
                                    @can('usuarios')
                                        @if ($compra->autorizado==0&&$errPDF==false)
                                        <td class="text-left py-3 px-4 text-xs sm:text-sm">
                                            @livewire('aprobar-compras', ['compra'=>$compra])
                                        </td>
                                        @endif
                                    @endcan
                                    @endforeach
                                  </tr>
                                </tbody>
                            </div>
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
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function destroyFolio(id){
            
            Swal.fire({
            title: '¿Está seguro?',
            text: "Una vez eliminado, no podra revertir el proceso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                let idval=id;
                var url = "{{route('compras.destroy', '')}}"+"/"+id;
                $('.destruir').attr("action",url); 
                $('.destruir').submit();
                /* $.ajax({
                    type: 'POST',
                    url: "{{url('Compras')}}" +'/'+id,
                    data: {
                        id:id,
                        _token:token,
                        _method: 'DELETE',
                        },
                    dataType: 'JSON'
                }); */
                //location.reload(2);
                Swal.fire({
                    title:"Proceso Completado",
                    text: "Eliminado",
                    icon:"success",
                    });
            } 
            })
            }

 </script>
@endpush
</x-app-layout>
