<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
                    <div class="row" >
                        <div class="grid col-md-1">

                            <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10">
                                <thead>
                                  <tr class="">
                                    <th class="w-1/7">Folio</th>
                                    <th class="w-1/7">Fecha de emision</th>
                                    <th class="w-1/7">Precio total de compra</th>
                                    <th class="w-1/7">Cuenta cargo</th>
                                    <th class="w-1/7">Metodo de Pago</th>
                                    <th class="w-1/7">Requisitó</th>
                                    <th class="w-1/7">Botones</th>
                                    <th></th>
                                  </tr>
                                </thead>

                                <tbody class="">
                                    @foreach ($compras as $compra)
                                    <tr class="text-center" >
                                        <td>{{$compra->foliocompra}}</td>
                                        <td>{{$compra->fecha_emision}}</td>
                                        <td>{{$compra->fecha_req}}</td>
                                        <td>{{$compra->cuenta_cargo}}</td>
                                        <td>{{$compra->met_pago}}</td>
                                        <td>{{$compra->requisita}}</td>
                                        <th>
                                            <a href="{{route('generarPDF', $compra)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3 py-0.2 px-0.5 sm:py-1 sm:px-1">PDF</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="h-20 mt-8">
                            <a href="{{route('compras.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-48">Crear Orden de Compra</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="mb-20 ml-8 mr-8">
        @if (($compras->count())>10)
        {{$compras->links()}}
        @else
        @endif
    </div>
</x-app-layout>