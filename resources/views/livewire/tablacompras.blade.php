<div>
    <table class="table-fixed ml-8 mt-8 mr-8" cellspacing="10">
        <thead>
          <tr class="">
            <th class="w-1/5">Folio</th>
            <th class="w-1/5">Codigo</th>
            <th class="w-1/5">Nombre</th>
            <th class="w-1/5">Cantidad</th>
            <th class="w-1/5">Precio</th>
            <th></th>
          </tr>
        </thead>

        <tbody class="">
            @forelse ($data as $item)
            <tr class="text-center" >
                <td>{{$item->folio}}</td>
                <td>{{$item->codigo}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->precio}}</td>
                <td>
                  <button wire:click="destruir({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>
                </td>
            </tr>
            @empty
            
            @endforelse
        </tbody>
    </table>

    
</div>
