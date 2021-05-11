<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 grid grid-cols-2 ">
                <div class="ml-8">
                    <h1 class="text-2xl">Datos de orden de compra</h1>
                    <h1>Folio de orden: {{$compra->foliocompra}}</h1>
                    <h1>Proveedor: <strong>{{$compra->prov_prod}}</strong></h1>
                    <h1>Fecha de emision: {{$compra->fecha_emision}}</h1>
                    <h2>Precio Total: $ {{$compra->p_total_c_imp}}</h2>
                    <h2>Fecha requerida: {{$compra->fecha_req}}</h2>
                </div>
                
                <div class="mt-4">
                    <p><a href="{{route('productoscompras.agregar', $compra)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded ml-6 mt-2 "> Agregar Productos </a></p><br>
                   {{--  <p><a href="{{route('productos.edit', $producto)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 rounded ml-6 mt-4 ">Editar</a></p> --}}
                   
                   
                   <form action="{{route('compras.destroy', $compra)}}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
               
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>