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
                                    <th class="w-1/7">Nombre</th>
                                    <th class="w-1/7">Nombre encargado</th>
                                    <th class="w-1/7">Direccion de envio</th>
                                    <th class="w-1/7">Localidad</th>
                                    <th class="w-1/7">Codigo postal</th>
                                    <th class="w-1/7">Estado</th>
                                    <th class="w-1/7">Telefono</th>
                                    <th></th>
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