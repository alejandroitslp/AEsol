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
                                <input class="rounded-lg" type="text" name="nombre" value={{old('nombre')}} >
                                </div>
                            </label>
                    
                            @error('nombre')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror

                                <br>

                            <label>
                                Direccion Proveedor
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="direccion" value={{old('direccion')}} >
                                </div>
                            </label>
                        
                            @error('direccion')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                Localidad 
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="localidad" value={{old('localidad')}} >
                                </div>
                            </label>
                        
                            @error('localidad')
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
                                <input class="rounded-lg" type="text" name="estado" value={{old('estado')}} >
                                </div>
                            </label>
                            
                            @error('estado')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                Codigo Postal
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="cp" value={{old('cp')}} >
                                </div>
                            </label>
                        
                            @error('cp')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                telefono
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="rounded-lg" type="text" name="telefono" value={{old('telefono')}} >
                                </div>
                            </label>
                            
                            @error('telefono')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>
                        </div>
                        <div class="ml-8 mt-10">
                            <button  type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Enviar formulario</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>