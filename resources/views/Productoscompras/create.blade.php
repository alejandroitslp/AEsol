<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 grid grid-cols-3 ">
                    <div class="ml-14 mt-8">
                     @livewire('tablacompras', ['item2'=>$item2])

                        <form action="{{route('productoscompras.store')}}" method="POST">

                            @csrf
                    
                            <input name="folio" type="hidden" value="{{$item2}}">


                            <label>
                                Codigo
                                <br>
                                <div class="ml-8 mt-3">
                                <input type="text" name="codigo" value={{old('codigo')}} >
                                </div>
                            </label>
                    
                            @error('codigo')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>

                            <label>
                                Nombre
                                <br>
                                <div class="ml-8 mt-3">
                                <input type="text" name="nombre" value={{old('nombre')}} >
                                </div>
                            </label>
                    
                            @error('nombre')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>

                            <label>
                                Cantidad
                                <br>
                                <div class="ml-8 mt-3">
                                <input type="text" name="cantidad" value={{old('cantidad')}} >
                                </div>
                            </label>
                    
                            @error('cantidad')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>
    
                        
    
                    </div>
                    <div class="ml-14 mt-8">
                                            
    
                        <br>
                        <label>
                            Precio:
                            <br>
                            <div class="ml-8 mt-3">
                            <input type="text" name="precio" value={{old('precio')}}>
                            </div>
                        </label>
                
                        @error('precio')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
    
                    </div>
                    <div class="ml-14 mt-8">
                       
                        <div>
                            
                        </div>
    
    
                        <div class="ml-8 mt-2 mb-8">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Agregar Otro</button>
                        </div>
                        <div>
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8" href="{{route('compras.index')}}">Terminar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>