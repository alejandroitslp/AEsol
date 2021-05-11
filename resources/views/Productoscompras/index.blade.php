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
                                    <th class="w-1/6">Folio</th>
                                    <th class="w-1/6">Codigo</th>
                                    <th class="w-1/6">Nombre</th>
                                    <th class="w-1/6">Cantidad</th>
                                    <th class="w-1/6">Precio</th>
                                    <th></th>
                                  </tr>
                                </thead>

                                <tbody class="">
                                    @foreach ($productoscompras as $productoscompra)
                                    <tr class="text-center" >
                                        <td>{{$productoscompra->folio}}</td>
                                        <td>{{$productoscompra->codigo}}</td>
                                        <td>$ {{$productoscompra->nombre}}</td>
                                        <td>{{$productoscompra->cantidad}}</td>
                                        <td>{{$productoscompra->precio}}</td>
                                        <th><form action="{{'productoscompras.destroy', $productoscompra)}}" method="POST">
                                            @csrf
                                            @method('delete')
                        
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
                                            {{-- <a href="{{route('generarPDF', $productoscompra->folio)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">PDF</a> --}}
                                        </form>
                                        </th>
                                    </tr>
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="mb-20 ml-8 mr-8">
        @if (($productoscompras->count())>10)
        {{$productoscompras->links()}}
        @else
        @endif
    </div>
</x-app-layout>