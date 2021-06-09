<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Productoscompra;
use Livewire\Component;

class TablaAprov extends Component
{
    public $aproData;

    public function render()
    {

        $this->aproData=Compra::where('autorizado', 1)->orderBy('foliocompra','asc')->get();
        $this->aproProd=Productoscompra::get();
        return view('livewire.tabla-aprov');
    }

}
