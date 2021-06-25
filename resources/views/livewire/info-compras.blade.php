<div>
    {{-- The whole world belongs to you. --}}
        <div class="ml-8 mt-3">
            @php
                $cuenta=0;
                $cuentaEsp=0;
                $cuentaProv=0;
                $contadorOProv=0;
            @endphp
            @foreach($comprasCurr as $compra)
            @php
                $cuenta=$cuenta+$compra->p_total_c_imp;
            @endphp
            @endforeach
            @foreach($comprasCurrEsp as $compra2)
            @php
                $cuentaEsp=$cuentaEsp+$compra2->p_total_c_imp;
            @endphp
            @endforeach
            <h1 class="text-4xl">Gasto de ordenes de compra v&aacute;lidadas</h1>
            <div class="mt-8 mb-4">
                <div>
                    <label>
                        Gasto del:
                    </label>
                    <select   id="fechaComp" name="fechaComp" wire:model="fechaComp" class="w-28 rounded-lg h-7 p-1" required>
                            <option value="1" ><p>D&iacute;a</p></option>
                            <option value="2" ><p>Semana</p></option>
                            <option value="3" ><p>Mes</p></option>
                            <option value="4" ><p>A&ntilde;o</p></option>
                    </select>
                    <p>Desde: {{$dateStart}} hasta: {{$dateEnd}} se ha gastado ${{number_format($cuenta,2,'.',',')}}</p>
                </div>
                <br>
                <hr class="w-3/4">
                <div class="mt-8">
                    <label>
                        Seleccione una fecha de inicio:
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaIni" name="fechaIni" min="2018-01-01" max="2031-12-31" wire:model="fechaIni">
                    <label>
                        fecha de término: 
                    </label>
                    <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaEnd" name="fechaEnd" min="2018-01-01" max="2031-12-31" wire:model="fechaEnd">
                    <p>Gasto total del rango de fechas: ${{number_format($cuentaEsp,2,'.',',')}}</p>
                </div>
                <br>
                <hr class="w-3/4">
                <div class="mt-8">
                    <label>
                        Ordenes de proveedor
                    </label>
                    @php
                        $repeatedprov=1;
                    @endphp
                    <select   id="provComp" name="provComp" wire:model="provComp" class="w-64 rounded-lg h-7 p-1" required>
                        @foreach ($provCompras as $provCompra)
                        @foreach ($relprovs as $relprov)
                        @if ($repeatedprov==$relprov->id)
                            
                        @else
                            @if ($provCompra->prov_prod==$relprov->id)
                            @php
                                $repeatedprov=$relprov->id;
                            @endphp
                                <option value="{{$repeatedprov}}" ><p>{{$relprov->nombre_prov}}</p></option>
                            @endif
                        @endif
                        @endforeach
                        @endforeach
                </select>
                <label>
                    De: 
                </label>
                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaIni2" name="fechaIni2" min="2018-01-01" max="2031-12-31" wire:model="fechaIni2">
                <label>
                    Al: 
                </label>
                <input class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg w-18" type="date" id="fechaEnd2" name="fechaEnd2" min="2018-01-01" max="2031-12-31" wire:model="fechaEnd2">
                @foreach ($comprasProvs as $comprasProv)
                    @php
                        $cuentaProv=$cuentaProv+$comprasProv->p_total_c_imp;
                        $contadorOProv++;
                    @endphp
                @endforeach
                <p>Se ha gastado: $ {{number_format($cuentaProv,2,'.',',')}} en {{$contadorOProv}} ordenes de compra del proveedor. Desde: {{$fechaIni2}} a {{$fechaEnd2}}</p>
                </div>
            </div>
            
        </div>
</div>
