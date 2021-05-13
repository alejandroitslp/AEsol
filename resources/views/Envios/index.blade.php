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
                                    <th class="w-1/8">Nombre</th>
                                    <th class="w-1/8">Nombre encargado</th>
                                    <th class="w-1/8">Direccion de envio</th>
                                    <th class="w-1/8">Localidad</th>
                                    <th class="w-1/8">Codigo postal</th>
                                    <th class="w-1/8">Estado</th>
                                    <th class="w-1/8">Telefono</th>
                                    {{-- <th class="w-1/8">Eliminar</th> --}}
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
                                        {{-- <td>
                                            <form action="{{route('envios.destroy', $envio)}}" method="POST">
                                                @csrf
                                                @method('delete')
                            
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
                                           
                                            </form>
                                        </td> --}}
                                    </tr>
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