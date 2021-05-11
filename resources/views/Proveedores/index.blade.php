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
                                    <th class="w-1/7">Nombre de Proveedor</th>
                                    <th class="w-1/7">Direccion de proveedor</th>
                                    <th class="w-1/7">Localidad</th>
                                    <th class="w-1/7">Estado</th>
                                    <th class="w-1/7">Codigo Postal</th>
                                    <th class="w-1/7">Telefono</th>
                                  </tr>
                                </thead>

                                <tbody class="">
                                    @foreach ($proveedores as $proveedor)
                                    <tr class="text-center" >
                                        <td>{{$proveedor->nombre_prov}}</td>
                                        <td>{{$proveedor->dir_prov}}</td>
                                        <td>{{$proveedor->loc_prov}}</td>
                                        <td>{{$proveedor->edo_prov}}</td>
                                        <td>{{$proveedor->cp_prov}}</td>
                                        <td>{{$proveedor->telefono_prov}}</td>
                                        <th><form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
                                            @csrf
                                            @method('delete')
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
                                       
                                        </form>
                                        </th>
                                    </tr>
                                    @endforeach
                                  </tr>
                                </tbody>
                              </table>

                        </div>
                        <div class="h-20 mt-8">
                            <a href="{{route('proveedores.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-48">Insertar Proveedor</a> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="mb-20 ml-8 mr-8">
        @if (($proveedor->count())>5)
        {{$proveedores->links()}}
        @else
        @endif
    </div>
</x-app-layout>