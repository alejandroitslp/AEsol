<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Productoscompra;
use Livewire\Component;
use Livewire\WithPagination;

class TablaAprov extends Component
{
    use WithPagination;

    

    public function render()
    {

        $aproData=Compra::where('autorizado', 1)->orderBy('foliocompra','asc')->get();
        $this->aproProd=Productoscompra::get();
        return view('livewire.tabla-aprov',compact('aproData'));
    }

}
