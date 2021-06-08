<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid  lg:grid-cols-3 sm:grid-cols-2" >
                <div class="ml-14 mt-8 text-xs sm:text-base">
                <h1>Pagina para editar Orden de Compra</h1>
                <form action="{{route('compras.update', $compra)}}" method="POST">

                    @csrf

                    @method('put')


                    <label>
                        folio de compra
                        <br>
                        <div class="ml-8 mt-3">
                        <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="folio" value="{{$compra->foliocompra}}" placeholder="{{$compra->foliocompra}}">
                        </div>
                    </label>
            
                    @error('folio')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br>
                

                <label>
                    Proveedor: 
                    <br>
                    <div class="ml-8 mt-3">
                        <select   id="provprod" name="provprod" class="w-28 rounded-lg">
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
        

                <br>


                <label>
                    Responsable de Orden: 
                    <br>
                    <div class="ml-8 mt-3">
                        <select  id="resp" name="resp" class="w-28 rounded-lg">
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

                <label>
                    Embarcar: 
                    <br>
                    <div class="ml-8 mt-3">
                        <select class="rounded-lg" id="embarque" name="embarque">
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

                <label>
                    Tipo de moneda
                    <br>
                    <div class="ml-8 mt-3">
                        <select class="rounded-lg" id="tmoneda" name="tmoneda">
                            <option value="Pesos" {{old('embarque')=="Pesos" ? 'selected' : ''}}>Pesos MXN</option>
                            <option value="Dolar" {{old('embarque')=="Dolar" ? 'selected' : ''}}>Dolar USD</option>
                        </select>
                    </div>
                </label>
        
                @error('tmoneda')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror

                <br>

            </div>
            <div class="ml-14 mt-8 text-xs sm:text-base">
                
                <label>
                    Método de pago: 
                    <br>
                    <div class="ml-8 mt-3">
                        <select class="rounded-lg" id="metPago" name="metPago">
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
                    <input  class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="cref" value={{old('cref')}}>
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
                    <input class="rounded-lg py-0.5 px-0.5 sm:py-1 sm:px-1" type="date" id="fref" name="fref" value="{{old('fref')}}"min="2018-01-01" max="2022-12-31">
                </div>
        
                @error('fref')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>

                <label>
                    Envio a: 
                    <br>
                    <div class="ml-8 mt-3">
                        <select   id="envio" name="envio" class="w-28 rounded-lg">
                            @php
                                $counter1=0;   
                            @endphp
                            @foreach ($envios as $envio)
                                @php
                                    $counter1=$counter1+1;    
                                @endphp
                                <option value="{{$envio->id}}" {{old('envio')==$counter1 ? 'selected' : ''}}><p>{{$envio->nombre}} : {{$envio->dir_envio}}</p></option>
                            @endforeach
                        </select>
                    </div>
                </label>

        
                @error('envio')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror

                <br>

                <label>
                    Cuenta cargo: 
                    <br>
                    <div class="ml-8 mt-3">
                    <input  class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="ccargo" value={{old('ccargo')}}>
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
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="date" id="freq" name="freq" value="{{old('freq')}}"min="2018-01-01" max="2022-12-31">
                </div>

                @error('freq')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>

            </div>
            <div class="ml-14 mt-8 text-xs sm:text-base">

                <label>
                    Requisita:
                    <br>
                    <div class="ml-8 mt-3">
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg" type="text" name="requisita" value={{old('requisita')}}>
                    </div>
                </label>
        
                @error('requisita')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>

                <label>
                    Comentarios: Puede omitirlos
                    <br> 
                    <div class="ml-8 mt-3">
                    <textarea class="rounded-lg" name="comentarios" rows="5">{{old('comentarios')}}</textarea>
                    </div>
                </label>
        
                @error('comentarios')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror

                <br>

                <label>
                    Descripcion de la Orden:
                    <br> 
                    <div class="ml-8 mt-3">
                    <textarea class="rounded-lg" name="desc_orden" rows="2">{{old('desc_orden')}}</textarea>
                    </div>
                </label>
        
                @error('desc_orden')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 mb-8"> Enviar formulario</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>