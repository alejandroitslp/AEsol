<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
    {{-- The Master doesn't talk, he acts. --}}
    <table class="min-w-full bg-white" cellspacing="10">
        <thead class="bg-blue-400 text-white">
            <tr class="">
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Folio</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Fecha de emision</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Descripcion</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Fecha requerida</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Cuenta cargo</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Metodo de Pago</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Requisitó</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Botones</th>
                <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs">Autorizado</th>
              </tr>
        </thead>
        @foreach ($aproData as $item)
        <tbody class="text-gray-700">
            <tr class="text-center" >
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->foliocompra}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->fecha_emision}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->desc_orden}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->fecha_req}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->cuenta_cargo}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->met_pago}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->requisita}}</td>
                <td class="w-1/9 text-left py-2 px-2 text-sm">
                    <a href="{{route('generarPDF', $item)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3 py-0.2  sm:py-1 sm:px-1">PDF</a>
                </td>
                <td class="w-1/9"> @livewire('aprobar-compras', ['compra'=>$item])</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</div>
