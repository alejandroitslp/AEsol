<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:px-32 py-8 w-full " >
                <div class="shadow overflow-hidden rounded border-b border-gray-200">

                    <table class="min-w-full bg-white" cellspacing="10">
                        <thead class="bg-blue-400 text-white">
                        <tr class="">
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre encargado</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Direccion de envio</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Localidad</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Codigo postal</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Estado</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
                            <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody class="text-gray-700">
                            @foreach ($envios as $envio)
                            <tr class="text-center" >
                                <td class="text-left py-3 px-4">{{$envio->nombre}}</td>
                                <td class="text-left py-3 px-4">{{$envio->nombre_enc}}</td>
                                <td class="text-left py-3 px-4">{{$envio->dir_envio}}</td>
                                <td class="text-left py-3 px-4">{{$envio->loc_envio}}</td>
                                <td class="text-left py-3 px-4">{{$envio->cp_envio}}</td>
                                <td class="text-left py-3 px-4">{{$envio->edo_envio}}</td>
                                <td class="text-left py-3 px-4">{{$envio->telefono_envio}}</td>
                                @php
                                    $ctrlcount=0;
                                    $ctrlcount2=0;
                                @endphp
                                @if (count($compras)==0)
                                    <td class="text-left py-3 px-4">
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
                                <td class="text-left py-3 px-4"><p>Presente en orden</p></td>
                                @php
                                    $ctrlcount=1;
                                @endphp
                                @endif
                                @if ($envio->id!=$compra->id_envios)
                                @php
                                    $ctrlcount2=$ctrlcount2+1;
                                @endphp
                                @if ($ctrlcount2==count($compras))
                                <td class="text-left py-3 px-4">
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
        
    
    
    <div class="mb-20 ml-8 mr-8">
        @if (($envios->count())>10)
        {{$envios->links()}}
        @else
        @endif
    </div>
</x-app-layout>