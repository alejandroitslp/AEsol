<x-app-layout>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-1 sm:grid-cols-3">
                    <div class="ml-14 mt-8">
                        <form action="{{route('proveedores.update', $proveedor)}}" method="POST">
                            
                            @csrf

                            @Method('put')
                    
                            <label>
                                Nombre de Proveedor
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="nombre_prov" value="{{$proveedor->nombre_prov}}" >
                                </div>
                            </label>
                    
                            @error('nombre_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror

                                <br>

                            <label>
                                Direccion Proveedor
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="dir_prov" value="{{$proveedor->dir_prov}}" >
                                </div>
                            </label>
                        
                            @error('dir_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                Localidad 
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="loc_prov" value="{{$proveedor->loc_prov}}" >
                                </div>
                            </label>
                        
                            @error('loc_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>
                            
                        </div>
                        <div class="ml-14 mt-3">
                            <br>
                            <label>
                                Estado
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="edo_prov" value="{{$proveedor->edo_prov}}" >
                                </div>
                            </label>
                            
                            @error('edo_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                Codigo Postal
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="cp_prov" value="{{$proveedor->cp_prov}}" >
                                </div>
                            </label>
                        
                                <br> 

                            <label>
                                telefono
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="telefono_prov" value="{{$proveedor->telefono_prov}}" >
                                </div>
                            </label>
                            
                                <br> 
                        </div>
                        <div class="ml-8 mt-10">
                            <label>
                                Nombre de encargado sucursal
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="nombre_prov_suc" value="{{$proveedor->nombre_prov_suc}}" >
                                </div>
                            </label>
                        
                                <br> 

                            <label>
                                RFC
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="RFC" value="{{$proveedor->RFC}}" >
                                </div>
                            </label>
                            
                                <br> 

                                <label>
                                    Razon Social: 
                                    <br>
                                    <div class="ml-8 mt-3">
                                    <input class="rounded-lg" type="text" name="razon_social" value="{{$proveedor->razon_social}}" >
                                    </div>
                                </label>
                        
    
                                    <br>

                            <button  type="submit" class="mb-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Enviar formulario</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>