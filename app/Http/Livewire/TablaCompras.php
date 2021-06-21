<?php

namespace App\Http\Livewire;

use App\Models\Productoscompra;
use Livewire\Component;
use PhpParser\Node\Stmt\Foreach_;

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
