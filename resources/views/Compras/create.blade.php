<x-app-layout>
    <div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2">
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
                        @enderror

                        <br>
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
                        @enderror
                
                        <br>
                        <label>
                            Cantidad de productos a ordenar
                            <br>
                            <div class="ml-8 mt-3">
                            <input type="text" name="cantidad" value={{old('cantidad')}}> 
                            </div>
                        </label>
                        <br>
                        
                </div>
                <div class="ml-14 mt-8">
                    <label>
                        Fecha de emision
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="fechae" value={{old('fechae')}}>
                        </div>
                    </label>
            
                    @error('fechae')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
            
                    <br>
                    <label>
                        Proveedor
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="provprod" value={{old('provprod')}}>
                        </div>
                    </label>
            
                    @error('provprod')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
            
                    <br>
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
                    @enderror

                    <br>
                    <label>
                        Precio Total de producto
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="ptotal" value={{old('ptotal')}}>
                        </div>
                    </label>
            
                    @error('ptotal')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Responsable de orden: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="resp" value={{old('resp')}}>
                        </div>
                    </label>
            
                    @error('resp')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Embarcar Via: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="embarque" value={{old('embarque')}}>
                        </div>
                    </label>
            
                    @error('embarque')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Tipo de Moneda:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="tmoneda" value={{old('tmoneda')}}>
                        </div>
                    </label>
            
                    @error('tmoneda')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Metodo de Pago:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="metPago" value={{old('metPago')}}>
                        </div>
                    </label>
            
                    @error('metPago')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Precio total con impuesto:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="ptimp" value={{old('ptimp')}}>
                        </div>
                    </label>
            
                    @error('ptimp')
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
                    <label>
                        Fecha de referencia: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="fref" value={{old('fref')}}>
                        </div>
                    </label>
            
                    @error('fref')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
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
                    <label>
                        Fecha requerido:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="freq">
                        </div>
                    </label>

                    @error('freq')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
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