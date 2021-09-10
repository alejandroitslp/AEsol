<div class="px-0 md:px-32 w-5/3 py-8 md:w-full">
    <div class="shadow overflow-scroll md:overflow-hidden rounded border-b border-gray-200">
        <input class="appearance-none bg-white-200 border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Buscar por Folio" aria-label="Folio" wire:model="searchFolio">
        <input class="appearance-none bg-white-200 border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Buscar por Descripcion" aria-label="Descripcion" wire:model="searchDesc">
    {{-- The Master doesn't talk, he acts. --}}
    <table class="min-w-full bg-white table-auto" cellspacing="10">
        <thead class="bg-blue-400 text-white">
            <tr class="">
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Folio</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Fecha de emision</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Descripcion</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Fecha requerida</th>
                {{-- <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-sm">Cuenta cargo</th> --}}
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Metodo de Pago</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Requisitó</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Botones</th>
                @can('usuarios')
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-xs">Autorizado</th>
                @endcan
                {{-- <th class="w-1/9 text-left py-3 px-4 uppercase font-semibold text-xs">Estado</th> --}}
              </tr>
        </thead>
        <tbody class="text-gray-700">
        @foreach ($aproData as $item)
        
            <tr class="text-center" >
                <td class="w-1/8 text-left py-2 px-2 text-sm text-white"><div x-data="{ open: false }"><button class="rounded focus:outline-none focus:ring " x-on:click="open = !open" x-transition style="background-color:
                    @php
                    $colorCelda='';
                        foreach ($estado as $itemStatus) {
                            if (($item->foliocompra==$itemStatus->folio)&&($itemStatus->estado=='pendiente')) {
                            $colorCelda='#ECCF00';
                            break;
                            }
                            else if(($item->foliocompra==$itemStatus->folio)&&($itemStatus->estado=='cancelado')){
                            $colorCelda='#EB3030';
                            break;
                            } 
                            else if(($item->foliocompra==$itemStatus->folio)&&($itemStatus->estado=='entregado')){
                            $colorCelda='#31AEFF';
                            break;
                            }
                            else
                            {
                                $colorCelda='#566573';
                            }
                        }
                    @endphp
                {{$colorCelda}}"><strong> {{$item->foliocompra}}</strong></button>
                <div>
                    <ul x-show="open" @click.away="open = false" >
                        <li class="text-center mt-2"><button class='bg-blue-300 hover:bg-blue-400 active:bg-blue-700 text-white font-bold rounded content-center focus:outline-none focus:ring focus:border-blue-300' wire:click="$emit('entregado',{{ $item->id }})">Entregado</button></li>
                        <li class="text-center mt-2"><button class='bg-yellow-300 hover:bg-yellow-400 text-white font-bold rounded focus:outline-none focus:ring' wire:click="pendiente('{{ $item->foliocompra }}')">Pendiente</button></li>
                        <li class="text-center mt-2"><button class='bg-red-500 hover:bg-red-800 text-white font-bold rounded focus:outline-none focus:ring      ' wire:click="cancelar('{{ $item->foliocompra }}')">Cancelar</button></li>
                    </ul>
                </div></td> 
                <td class="w-1/8 text-left py-2 px-2 text-sm">{{$item->fecha_emision}}</td>
                <td class="w-1/8 text-left py-2 px-2 text-sm">{{$item->desc_orden}}</td>
                <td class="w-1/8 text-left py-2 px-2 text-sm">{{$item->fecha_req}}</td>
                {{-- <td class="w-1/9 text-left py-2 px-2 text-sm">{{$item->cuenta_cargo}}</td> --}}
                <td class="w-1/8 text-left py-2 px-2 text-sm">{{$item->met_pago}}</td>
                <td class="w-1/8 text-left py-2 px-2 text-sm">{{$item->requisita}}</td>
                <td class="w-1/8 text-left py-2 px-2 text-sm">
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
                @can('usuarios')
                <td class="w-1/8"> 
                    <input type="checkbox" id="cbox2" value="" wire:click="actApr2('{{ $item->foliocompra }}','{{ $item->autorizado }}')" {{$item->autorizado==true ? 'checked' : ''}} > <label for="cbox2">Aprobar</label>
                </td>
                @endcan
                {{-- <td>
                    <input class="bg-red-500 text-white font-bold rounded-t px-4 py-2" wire:click="cancelar('{{ $item->foliocompra }}')" type="button" value="Cancelar" >
                </td> --}}
            </tr>
        @endforeach
    </tbody>
    </table>
    <div>
        @if ($aproData)
            {{$aproData->links()}}
        @endif
    </div>
    </div>
    @push('js')
    <script>
        Livewire.on('entregado', idCompra =>
        {
            Swal.fire({
            title: 'Selecciona la fecha en la que se entregó',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Hoy',
            denyButtonText: 'Otra Fecha',
            customClass: {
                actions: 'my-actions',
                cancelButton: 'order-3 right-gap',
                confirmButton: 'order-2',
                denyButton: 'order-1',
            }
            }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emitTo('tabla-aprov','entregadoMet',idCompra);
                Swal.fire('Gracias!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire({
                title: 'Porfavor selecciona la fecha de entrega',
                html: '<input class="swal2-input" id="expiry-date">',
                stopKeydownPropagation: false,
                preConfirm: () => {
                    if (!flatpickrInstance.selectedDates[0]) {
                    Swal.showValidationMessage(`No se introdujo una fecha`)
                    }
                    else{
                        Livewire.emitTo('tabla-aprov','entregadoMetSP', flatpickrInstance.selectedDates[0], idCompra);
                        Swal.fire(
                        'Guardado, gracias!','','success'
                    );
                    }
                },
                willOpen: () => {
                    flatpickrInstance = flatpickr(
                    Swal.getPopup().querySelector('#expiry-date')
                    )
                }
                })
            }
            })
        });
    </script>
    @endpush
</div>
