<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8  " >
                <div class="ml-14 mt-8 grid grid-cols-1 sm:grid-cols-3 text-xs sm:text-base" >
                    <div class="w-1/2 "  >
                        <form action="{{route('productoscompras.store')}}" method="POST">

                            @csrf
                    
                            <input name="folio" type="hidden" value="{{$item2}}">


                            <label>
                                Codigo
                                <br>
                                <div class="ml-8 mt-3">
                                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="codigo" value={{old('codigo')}} >
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
                                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="nombre" value={{old('nombre')}} >
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
                                <input  class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="cantidad" value={{old('cantidad')}} >
                                </div>
                            </label>
                    
                            @error('cantidad')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>

                            <label>
                                Unidad: 
                                <br>
                                <div class="ml-8 mt-3">
                                    <select class="rounded-lg" id="medida" name="medida">
                                        <option value="pzas" {{old('medida')=="pzas" ? 'selected' : ''}}>piezas</option>
                                        <option value="hrs" {{old('medida')=="hrs" ? 'selected' : ''}}>horas</option>
                                        <option value="mts" {{old('medida')=="mts" ? 'selected' : ''}}>metros</option>
                                        <option value="kgs" {{old('medida')=="kgs" ? 'selected' : ''}}>kilos</option>
                                        <option value="lts" {{old('medida')=="lts" ? 'selected' : ''}}>litros</option>
                                        <option value="servicios" {{old('medida')=="servicios" ? 'selected' : ''}}>servicios</option>
                                    </select>
                                </div>
                            </label>
                    
                            @error('medida')
                                <br>
                                    <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <br>
    
                                <label>
                                    Precio:
                                    <br>
                                    <div class="ml-8 mt-3">
                                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="precio" value={{old('precio')}}>
                                    </div>
                                </label>
                        
                                @error('precio')
                                    <br>
                                        <small>*{{$message}}</small>
                                    <br>
                                @enderror
    
                        
                            <div class="ml-8 mt-2 mb-8 grid grid-cols-2">
                            <button type="submit" class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                  </svg>
                            </button>
                            <a class="mr-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-8" href="{{route('compras.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg></a>
                            </div>
                            
                        </form>
                    </div>
                        
                    <div class="ml-0 mb-8 mr-4" >
                        @livewire('tablacompras', ['item2'=>$item2])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>