<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container" >
                <div class="md:px-32 py-2 w-full">
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
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        

                        <table class="min-w-full bg-white" cellspacing="10">
                            <thead class="bg-blue-400 text-white">
                                <tr class="">
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre de Proveedor</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Direccion de proveedor</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Localidad</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Estado</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Codigo Postal</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
                                <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Boton</th>
                                </tr>
                            </thead>

                            <tbody class="text-gray-700">
                            
                                
                                @foreach ($proveedores as $proveedor)
                                    <tr class="text-center" v-for="row in rows">
                                    <td class="text-left py-3 px-4">{{$proveedor->nombre_prov}}</td>
                                    <td class="text-left py-3 px-4 ">{{$proveedor->dir_prov}}</td>
                                    <td class="text-left py-3 px-4 ">{{$proveedor->loc_prov}}</td>
                                    <td class="text-left py-3 px-4 ">{{$proveedor->edo_prov}}</td>
                                    <td class="text-left py-3 px-4 ">{{$proveedor->cp_prov}}</td>
                                    <td class="text-left py-3 px-4 ">{{$proveedor->telefono_prov}}</td>
                                    @php
                                        $ctrlcount=0;
                                        $ctrlcount2=0;
                                    @endphp
                                    @if (count($compras)==0)
                                    <td class="text-left py-3 px-4 "><form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
                                        @csrf
                                        @method('delete')
                    
                                        <button type="submit" >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        
                                    </form></td>
                                    @endif
                                    @foreach ($compras as $compra)
                                    @if (($proveedor->id==$compra->prov_prod)&&$ctrlcount==0)
                                    <td class="text-center py-3 px-4 ">
                                        <a  href="{{route('proveedores.edit', $proveedor)}}" class="inline-block">
                                            <svg class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6"  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="white">
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
                                        <td class="text-left py-3 px-4 ">
                                            <form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="w-20 text-center inline-block" >
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <a class="inline-block" href="{{route('proveedores.edit', $proveedor)}}">
                                                    <svg class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6"  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="white">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a> 
                                            </div>
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
                        <a href="{{route('proveedores.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-48">Insertar Proveedor</a> 
                    </div>
                </div>
            </div> 
            <div class="mb-20 ml-8 mr-8">
                @if (($proveedores->count())>4||($proveedores->count())<6||($proveedores->count())==5)
                {{$proveedores->links()}}
                @else
                @endif
            </div>
        </div>   
    </div>
    
    
</x-app-layout>