<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
                    <div class="row" >
                        <div class="grid col-md-1">
                            <div>
                                <div class="mt-8 ml-6">
                                    <a href="{{route('proveedores.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-1 mt-2">Recargar pagina</a>
                                </div>
                                <div>
                                    <form action="{{route('proveedores.index')}}" method="GET" role="search">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2" type="submit">Buscar por Nombre</button>
                                        <input  class="rounded mt-4 mb-4" type="text" value="" name="nombreprov">
                                    </form>
                                </div>
                            </div>

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
                                        @php
                                            $ctrlcount=0;
                                            $ctrlcount2=0;
                                        @endphp
                                        @if (count($compras)==0)
                                        <td><form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
                                            @csrf
                                            @method('delete')
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
                                            
                                        </form></td>
                                        @endif
                                        @foreach ($compras as $compra)
                                        @if (($proveedor->id==$compra->prov_prod)&&$ctrlcount==0)
                                         <td><p>Presente en orden</p></td>   
                                         @php
                                             $ctrlcount=1;
                                         @endphp
                                        @endif
                                        @if (($proveedor->id!=$compra->prov_prod))
                                            @php
                                            $ctrlcount2=$ctrlcount2+1;
                                            @endphp
                                        @if($ctrlcount2==count($compras))
                                        <td><form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
                                            @csrf
                                            @method('delete')
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
                                            
                                        </form></td>
                                        @endif
                                        @endif
                                        @endforeach
                                        
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
        @if (($proveedores->count())>=5)
        {{$proveedores->links()}}
        @else
        @endif
    </div>
</x-app-layout>