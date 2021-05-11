<?php

namespace App\Http\Livewire;

use App\Http\Requests\StoreCompra;
use Livewire\Component;
use App\Models\Proveedor;
use App\Models\Productoscompra;
use App\Models\Compra;

class TablaCompras extends Component
{
    public $msg = '';
    public $studentId = 55;

    
   
    public function render()
    {
        return view('livewire.tabla-compras');
    }
   
    public function clickEvt(Compra $compra)
    {
        return $compra->foliocompra;
        $this->msg =$compra->folioproducto;
    }
   
    public function trackClickEvt($studentId)
    {
        $this->msg = $studentId;
    }
    
}
