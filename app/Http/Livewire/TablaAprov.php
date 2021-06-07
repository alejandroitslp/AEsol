<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use Livewire\Component;

class TablaAprov extends Component
{
    public $aproData;

    public function render()
    {
        $this->aproData=Compra::where('autorizado', 1)->get();
        return view('livewire.tabla-aprov');
    }
}
