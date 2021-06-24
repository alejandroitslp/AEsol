<div>
    {{-- The whole world belongs to you. --}}
        <div class="ml-8 mt-3">
            @php
                $cuenta=0;
            @endphp
            @foreach($comprasCurr as $compra)
            @php
                $cuenta=$cuenta+$compra->p_total_c_imp;
            @endphp
            @endforeach
            <h1 class="text-4xl">Gasto de ordenes de compra v&aacute;lidadas</h1>
            <div class="mt-8 mb-4">
                <label>
                    Gasto por:
                </label>
                <select   id="fechaComp" name="fechaComp" wire:model="fechaComp" class="w-28 rounded-lg h-7 p-1" required>
                        <option value="1" ><p>D&iacute;a</p></option>
                        <option value="2" ><p>Semana</p></option>
                        <option value="3" ><p>Mes</p></option>
                        <option value="4" ><p>A&ntilde;o</p></option>
                </select>
                <p>Desde: {{$dateStart}} hasta: {{$dateEnd}} se ha gastado ${{$cuenta}}</p>
            </div>
            
        </div>
</div>
