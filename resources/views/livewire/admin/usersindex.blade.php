<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <input wire:model="searchuser" type="text" class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Buscar por nombre de usuario">
        <table class="min-w-full bg-white" cellspacing="10">
            <thead class="bg-blue-400 text-white">
            <tr class="">
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                <th class="w-1/3 text-center py-3 px-4 uppercase font-semibold text-sm">Email</th>
                <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Fecha de Creacion</th>
                <th class="w-1/3 text-center py-3 px-4 uppercase font-semibold text-sm">Botones</th>
            </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach ($usuarios as $usuario)
                <tr class="text-center" >
                    <td class="text-left py-3 px-4">{{$usuario->name}}</td>
                    <td class="text-left py-3 px-4">{{$usuario->email}}</td>
                    <td class="text-left py-3 px-4">{{$usuario->created_at}}</td>
                    <td class="">
                        <a class="inline-block" href="{{route('usuarios.edit', compact('usuario'))}}">
                            <svg class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6"  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a> 
                        <a class="inline-block" href="" wire:click="borrar({{$usuario->id}})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded sm:py-1 sm:px-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            @if (($usuarios->count())>10)
            {{$usuarios->links()}}
            @else
            @endif
        </div>
    </div>  
</div>
