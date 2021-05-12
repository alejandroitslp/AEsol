<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8  ">
                <div class="ml-14 mt-8 grid grid-cols-1 sm:grid-cols-2 text-xs sm:text-base">
                    <div class="w-1/2">
                        <form action="{{route('productoscompras.store')}}" method="POST">

                            @csrf
                    
                            <input name="folio" type="hidden" value="{{$item2}}">


                            <label>
                                Codigo
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 " type="text" name="codigo" value={{old('codigo')}} >
                                </div>
                            </label>
                    
                            @error('codigo')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                                <br>

                            <label>
                                Descripcion
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 " type="text" name="nombre" value={{old('nombre')}} >
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
                                <input  class="py-0.5 px-0.5 sm:py-1 sm:px-1 " type="text" name="cantidad" value={{old('cantidad')}} >
                                </div>
                            </label>
                    
                            @error('cantidad')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>
    
                                <label>
                                    Precio:
                                    <br>
                                    <div class="ml-8 mt-3">
                                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 " type="text" name="precio" value={{old('precio')}}>
                                    </div>
                                </label>
                        
                                @error('precio')
                                    <br>
                                        <small>*{{$message}}</small>
                                    <br>
                                @enderror
    
                        
                            <div class="ml-8 mt-2 mb-8 grid grid-cols-2">
                            <button type="submit" class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Agregar</button>
                            <a class="mr-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-8" href="{{route('compras.index')}}">Terminar</a>
                            </div>
                            
                        </form>
                    </div>
                        
                    <div class="w-2 mb-8">
                        @livewire('tablacompras', ['item2'=>$item2])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>