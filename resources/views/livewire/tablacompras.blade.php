<div>
    <table class="table-fixed ml-0 mt-8 mr-8" cellspacing="10">
        <thead>
          <tr class="">
            <th class="w-1/6">Folio</th>
            <th class="w-1/6">Codigo</th>
            <th class="w-1/6">Nombre</th>
            <th class="w-1/6">Cantidad</th>
            <th class="w-1/6">Medida</th>
            <th class="w-1/6">Precio</th>
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
                <td>{{$item->medida}}</td>
                <td>{{$item->precio}}</td>
                <td>
                  <button wire:click="destruir({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-600 hover:bg-red-600 hover:text-white rounded">Borrar</button>
                </td>
            </tr>
            @empty
            
            @endforelse
        </tbody>
    </table>

    
</div>
