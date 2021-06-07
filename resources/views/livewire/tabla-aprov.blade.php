<div>
    {{-- The Master doesn't talk, he acts. --}}
    <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10">
        <thead>
            <tr class="">
                <th class="w-1/9">Folio</th>
                <th class="w-1/9">Fecha de emision</th>
                <th class="w-1/9">Descripcion</th>
                <th class="w-1/9">Precio total de compra</th>
                <th class="w-1/9">Cuenta cargo</th>
                <th class="w-1/9">Metodo de Pago</th>
                <th class="w-1/9">Requisitó</th>
                <th class="w-1/9">Botones</th>
                <th class="w-1/9">Autorizado</th>
              </tr>
        </thead>
        @foreach ($aproData as $item)
        <tbody class="">
            <tr class="text-center" >
                <td>{{$item->foliocompra}}</td>
                <td>{{$item->fecha_emision}}</td>
                <td>{{$item->desc_orden}}</td>
                <td>{{$item->fecha_req}}</td>
                <td>{{$item->cuenta_cargo}}</td>
                <td>{{$item->met_pago}}</td>
                <td>{{$item->requisita}}</td>
                <td>

                </td>
                <td> @livewire('aprobar-compras', ['compra'=>$item])</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
