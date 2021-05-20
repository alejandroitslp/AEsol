<?php

namespace App\Http\Livewire;

use App\Models\Productoscompra;
use Livewire\Component;

class Tablacompras extends Component
{
    public $data;
    public $item2;

    public function render()
    {
        $this->data = Productoscompra::where('folio', $this->item2)->get();
        return view('livewire.tablacompras');
    }
    public function destruir($id)
    {
        if ($id) {
            $record = Productoscompra::where('id', $id);
            $record->delete();
        }
    }
}
