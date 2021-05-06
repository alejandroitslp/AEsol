<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ol>
                                @foreach ($compras as $compra)
                                    <div class="ml-8">
                                    <li>Hola mundo</a></li> 
                                    </div>
                                @endforeach
                            </ol>
                        </div>
                        <a href="{{route('compras.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2">Crear Producto</a>
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