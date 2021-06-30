<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:px-32 py-8 w-full " >
                <div class="shadow overflow-hidden rounded border-b border-gray-200">

                    <table class="min-w-full bg-white" cellspacing="10">
                        <thead class="bg-blue-400 text-white">
                        <tr class="">
                            <th class="w-1/2 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                            <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Email</th>
                            <th class="w-1/3 text-center py-3 px-4 uppercase font-semibold text-sm">Botones</th>
                        </tr>
                        </thead>

                        <tbody class="text-gray-700">
                            @foreach ($usuarios as $usuario)
                            <tr class="text-center" >
                                <td class="text-left py-3 px-4">{{$usuario->name}}</td>
                                <td class="text-center py-3 px-4">{{$usuario->email}}</td>
                                <td class="text-center py-3 px-4">
                                    <a class="inline-block" href="">Modificar</a> 
                                    <a class="inline-block" href="">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>
        </div> 
    </div>
        
    
    
    <div class="mb-20 ml-8 mr-8">
        @if (($usuarios->count())>10)
        {{$usuarios->links()}}
        @else
        @endif
    </div>
</x-app-layout>