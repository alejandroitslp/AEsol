<x-app-layout>
    <div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid  lg:grid-cols-3 sm:grid-cols-2">
                <div class="ml-14 mt-8">
                    <form action="{{route('compras.store')}}" method="POST">

                        @csrf
                
                        <label>
                            folio de compra
                            <br>
                            <div class="ml-8 mt-3">
                            <input type="text" name="folio" value={{old('folio')}} >
                            </div>
                        </label>
                
                        @error('folio')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                
                        {{-- <br>
                        <label>
                             Codigo del producto
                             <br>
                             <div class="ml-8 mt-3">
                             <input type="text" name="codigo" value={{old('codigo')}}> 
                             </div>
                        </label>
                
                        @error('codigo')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror --}}

                        {{-- <br>
                        <label>
                             Nombre del producto
                             <br>
                             <div class="ml-8 mt-3">
                             <input type="text" name="nombre" value={{old('nombre')}}> 
                             </div>
                        </label>
                
                        @error('nombre')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror --}}
                
                        {{-- <br>
                        <label>
                            Cantidad de productos a ordenar
                            <br>
                            <div class="ml-8 mt-3">
                            <input type="text" name="cantidad" value={{old('cantidad')}}> 
                            </div>
                        </label>
                        <br>

                        @error('cantidad')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror --}}
                    

                    <label>
                        Proveedor: 
                        <br>
                        <div class="ml-8 mt-3">
                            <select  id="provprod" name="provprod" class="w-28">
                                @php
                                    $counter1=0;   
                                @endphp
                                @foreach ($proveedores as $proveedor)
                                    @php
                                        $counter1=$counter1+1;    
                                    @endphp
                                    <option value="{{$proveedor->id}}" {{old('provprod')==$counter1 ? 'selected' : ''}}><p>{{$proveedor->nombre_prov}} : {{$proveedor->dir_prov}}</p></option>
                                @endforeach
                            </select>
                        </div>
                    </label>

            
                    @error('provprod')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
            
                    {{-- <br>
                    <label>
                        Precio unitario de producto
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="punitario" value={{old('punitario')}}>
                        </div>
                    </label>
            
                    @error('punitario')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror --}}

                    <br>


                    <label>
                        Responsable de Orden: 
                        <br>
                        <div class="ml-8 mt-3">
                            <select  id="resp" name="resp" class="w-28">
                                @php
                                    $counter=0;   
                                @endphp
                                @foreach ($responsables as $responsable)
                                    @php
                                        $counter=$counter+1;    
                                    @endphp
                                    <option value="{{$responsable->id}}" {{old('resp')==$counter ? 'selected' : ''}}><p>{{$responsable->nombre_resp}} : {{$responsable->puesto}}</p></option>
                                @endforeach
                            </select>
                        </div>
                    </label>
            
                    @error('resp')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>

                    {{-- <br>
                    <label>
                        Embarcar Via: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="embarque" value={{old('embarque')}}>
                        </div>
                    </label> --}}

                    <label>
                        Embarcar: 
                        <br>
                        <div class="ml-8 mt-3">
                            <select  id="embarque" name="embarque">
                                <option value="Terrestre" {{old('embarque')=="Terrestre" ? 'selected' : ''}}>Terrestre</option>
                                <option value="Maritimo" {{old('embarque')=="Maritimo" ? 'selected' : ''}}>Maritimo</option>
                                <option value="Aereo" {{old('embarque')=="Aereo" ? 'selected' : ''}}>Aereo</option>
                            </select>
                        </div>
                    </label>
            
                    @error('embarque')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>

                </div>
                <div class="ml-14 mt-8">
                    
                    {{-- <label>
                        Tipo de Moneda:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="tmoneda" value={{old('tmoneda')}}>
                        </div>
                    </label> --}}

                    <label>
                        Tipo de moneda
                        <br>
                        <div class="ml-8 mt-3">
                            <select  id="tmoneda" name="tmoneda">
                                <option value="Pesos" {{old('embarque')=="Pesos" ? 'selected' : ''}}>Pesos</option>
                                <option value="Dolar" {{old('embarque')=="Dolar" ? 'selected' : ''}}>Dolar</option>
                            </select>
                        </div>
                    </label>
            
                    @error('tmoneda')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    

                    <label>
                        Método de pago: 
                        <br>
                        <div class="ml-8 mt-3">
                            <select  id="metPago" name="metPago">
                                <option value="Transferencia">Transferencia</option>
                            </select>
                        </div>
                    </label>
            
                    @error('metPago')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Cotizacion referencia:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="cref" value={{old('cref')}}>
                        </div>
                    </label>
            
                    @error('cref')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label >Fecha referencia:</label>
                    <div class="ml-8 mt-3">
                        <input type="date" id="fref" name="fref" value="{{old('fref')}}"min="2018-01-01" max="2022-12-31">
                    </div>
            
                    @error('fref')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>

                </div>
                <div class="ml-14 mt-8">
                    <label>
                        Cuenta cargo: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="ccargo" value={{old('ccargo')}}>
                        </div>
                    </label>
            
                    @error('ccargo')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
            
                    <br>
                    <label >Fecha requerida:</label>
                    <div class="ml-8 mt-3">
                        <input type="date" id="freq" name="freq" value="{{old('freq')}}"min="2018-01-01" max="2022-12-31">
                    </div>

                    @error('freq')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>

                    <label>
                        Requisita:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="requisita" value={{old('requisita')}}>
                        </div>
                    </label>
            
                    @error('requisita')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>

                    <div>
                        
                    </div>


                    <div class="ml-8 mt-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Enviar formulario</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>