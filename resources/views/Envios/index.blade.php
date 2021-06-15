<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
                    <div class="row" >
                        <div class="grid col-md-1">

                            <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10">
                                <thead>
                                  <tr class="">
                                    <th class="w-1/9">Nombre</th>
                                    <th class="w-1/9">Nombre encargado</th>
                                    <th class="w-1/9">Direccion de envio</th>
                                    <th class="w-1/9">Localidad</th>
                                    <th class="w-1/9">Codigo postal</th>
                                    <th class="w-1/9">Estado</th>
                                    <th class="w-1/9">Telefono</th>
                                    <th class="w-1/9">Eliminar</th>
                                  </tr>
                                </thead>

                                <tbody class="">
                                    @foreach ($envios as $envio)
                                    <tr class="text-center" >
                                        <td>{{$envio->nombre}}</td>
                                        <td>{{$envio->nombre_enc}}</td>
                                        <td>{{$envio->dir_envio}}</td>
                                        <td>{{$envio->loc_envio}}</td>
                                        <td>{{$envio->cp_envio}}</td>
                                        <td>{{$envio->edo_envio}}</td>
                                        <td>{{$envio->telefono_envio}}</td>
                                        @php
                                            $ctrlcount=0;
                                            $ctrlcount2=0;
                                        @endphp
                                        @if (count($compras)==0)
                                            <td>
                                                <form action="{{route('envios.destroy', $envio)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                          </svg>
                                                    </button>
                                            
                                                </form>
                                            </td>
                                        @endif
                                        @foreach ($compras as $compra)
                                        @if (($envio->id==$compra->id_envios)&&$ctrlcount==0)
                                        <td><p>Presente en orden</p></td>
                                        @php
                                            $ctrlcount=1;
                                        @endphp
                                        @endif
                                        @if ($envio->id!=$compra->id_envios)
                                        @php
                                            $ctrlcount2=$ctrlcount2+1;
                                        @endphp
                                        @if ($ctrlcount2==count($compras))
                                        <td>
                                            <form action="{{route('envios.destroy', $envio)}}" method="POST">
                                                @csrf
                                                @method('delete')
                            
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                      </svg>
                                                </button>
                                            </form>
                                            
                                        </td>
                                       
                                        
                                        @endif
                                        @endif 
                                        @endforeach
                                        
                                    @endforeach

                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="h-20 mt-8">
                            <a href="{{route('envios.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-48">Crear Envio</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="mb-20 ml-8 mr-8">
        @if (($envios->count())>10)
        {{$envios->links()}}
        @else
        @endif
    </div>
</x-app-layout>