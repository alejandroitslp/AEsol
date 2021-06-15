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
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>
                                            </button>
                                            
                                        </form></td>
                                        @endif
                                        @foreach ($compras as $compra)
                                        @if (($proveedor->id==$compra->prov_prod)&&$ctrlcount==0)
                                        <td>
                                            <a  class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold  rounded  " href="{{route('proveedores.edit', $proveedor)}}" >
                                                <svg class=" ml-0 h-6 w-6"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                  </svg>
                                                </a> 
                                        </td>   
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
                                            <div class="w-20" >
                                                <button type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold  rounded   h-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                      </svg>
                                                </button>
                                                <a  class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold  rounded  " href="{{route('proveedores.edit', $proveedor)}}" >
                                                    <svg class="  h-6 w-6"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                      </svg>
                                                    </a> 
                                            </div>
                                            
                                            
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