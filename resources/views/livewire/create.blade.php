<div>
    @include('livewire.create')

    @forelse ($data as $item)
        <h1>{{$item->id}}</h1>
    @empty
        <p>No hay nada</p>
    @endforelse
</div>