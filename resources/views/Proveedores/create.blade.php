<x-app-layout>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-1 sm:grid-cols-3">
                    <div class="ml-14 mt-8">
                        <form action="{{route('proveedores.store')}}" method="POST">

                            @csrf
                    
                            <label>
                                Nombre de Proveedor
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="nombre_prov" value={{old('nombre_prov')}} >
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
                                <input class="rounded-lg" type="text" name="dir_prov" value={{old('dir_prov')}} >
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
                                <input class="rounded-lg" type="text" name="loc_prov" value={{old('loc_prov')}} >
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
                                <input class="rounded-lg" type="text" name="edo_prov" value={{old('edo_prov')}} >
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
                                <input class="rounded-lg" type="text" name="cp_prov" value={{old('cp_prov')}} >
                                </div>
                            </label>
                        
                             @error('cp_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br> 

                            <label>
                                telefono
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="telefono_prov" value={{old('telefono_prov')}} >
                                </div>
                            </label>
                            
                           @error('telefono_prov')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br> 
                        </div>
                        <div class="ml-8 mt-10">
                            <label>
                                Nombre de encargado sucursal
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="nombre_prov_suc" value={{old('nombre_prov_suc')}} >
                                </div>
                            </label>
                            
                           @error('nombre_prov_suc')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br> 

                            <label>
                                RFC
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="RFC" value={{old('RFC')}} >
                                </div>
                            </label>
                            
                           @error('RFC')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br> 

                                <label>
                                    Razon Social: 
                                    <br>
                                    <div class="ml-8 mt-3">
                                    <input class="rounded-lg" type="text" name="razon_social" value={{old('razon_social')}} >
                                    </div>
                                </label>
                        
                                @error('razon_social')
                                    <br>
                                        <small>*{{$message}}</small>
                                    <br>
                                @enderror
    
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