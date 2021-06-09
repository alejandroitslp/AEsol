<div class="grid col-md-1">
    {{-- The Master doesn't talk, he acts. --}}
    <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10">
        <thead>
            <tr class="">
                <th class="w-1/9">Folio</th>
                <th class="w-1/9">Fecha de emision</th>
                <th class="w-1/9">Descripcion</th>
                <th class="w-1/9">Fecha requerida</th>
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
                <td class="w-1/9">{{$item->foliocompra}}</td>
                <td class="w-1/9">{{$item->fecha_emision}}</td>
                <td class="w-1/9">{{$item->desc_orden}}</td>
                <td class="w-1/9">{{$item->fecha_req}}</td>
                <td class="w-1/9">{{$item->cuenta_cargo}}</td>
                <td class="w-1/9">{{$item->met_pago}}</td>
                <td class="w-1/9">{{$item->requisita}}</td>
                <td class="w-1/9">
                    <a href="{{route('generarPDF', $item)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3 py-0.2  sm:py-1 sm:px-1">PDF</a>
                </td>
                <td class="w-1/9"> @livewire('aprobar-compras', ['compra'=>$item])</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
