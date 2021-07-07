<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <input class="appearance-none bg-white-200 border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Buscar por Descripcion" aria-label="Descripcion" wire:model="searchDesc">
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
                    <a href="{{route('generarPDF', $item->id)}}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold  rounded   sm:py-1 sm:px-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                      </svg>
                    </a>
                    <a href="{{route('destinatarios.edit', $item->id)}}" class="inline-block bg-blue-300 hover:bg-blue-400 text-white font-bold  rounded   sm:py-1 sm:px-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                      </svg>
                    </a>
                </td>
                <td class="w-1/9"> 
                    <input type="checkbox" id="cbox2" value="" wire:click="actApr2('{{ $item->foliocompra }}','{{ $item->autorizado }}')" {{$item->autorizado==true ? 'checked' : ''}} > <label for="cbox2">Aprobar</label>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div>
        @if ($aproData)
            {{$aproData->links()}}
        @endif
    </div>
    </div>
</div>
