<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use Livewire\Component;

class AprobarCompras extends Component
{
    public $compra2;
    public $variableprueba;
    public $status;

    public function mount($compra)
    {
        $this->status=$compra->autorizado;
        $this->compra2=$compra->foliocompra;
    }
    public function render()
    {

        return view('livewire.aprobar-compras');
    }
    public function actApr()
    {
        $record = Compra::where('foliocompra',$this->compra2)->first();
        $this->variableprueba=$record->autorizado;
        if ($this->variableprueba==false) {
            $record->update([
                'autorizado'=> true
            ]);
        }
        if ($this->variableprueba==true) {
            $record->update([
                'autorizado'=> false
            ]);
        } 
    }
}
