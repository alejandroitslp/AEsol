<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Productoscompra;
use Livewire\Component;
use Livewire\WithPagination;

class TablaAprov extends Component
{
    public $searchDesc;

    use WithPagination;


    public function render()
    {

        $aproData=Compra::where('autorizado', 1)->where('desc_orden','LIKE','%'.$this->searchDesc.'%')->orderBy('foliocompra','asc')->paginate(10);
        $this->aproProd=Productoscompra::get();
        return view('livewire.tabla-aprov',compact('aproData'));
    }

    public function actApr2($foliocompra, $autorizado)
    {
        $record=Compra::where('foliocompra',$foliocompra)->first();
        if ($autorizado==false) {
            $record->update([
                'autorizado'=> true,
            ]);
        }
        if ($autorizado==true) {
            $record->update([
                'autorizado'=> false
            ]);
        }
     redirect()->route('compras.index');
    }
}
