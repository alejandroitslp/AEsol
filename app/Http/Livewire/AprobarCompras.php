<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Productoscompra;
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
        $sumaTotal=0;
        $sumaParcial=0;
        $impuesto=0;
        $otros=0;
        $record = Compra::where('foliocompra',$this->compra2)->first();
        $this->variableprueba=$record->autorizado;
        $colProds=Productoscompra::where('folio',$this->compra2)->get();
        foreach ($colProds as $colProd) {
            if (($colProd->precio)>0) {
                $sumaParcial=$sumaParcial+($colProd->cantidad*$colProd->precio);
            }
            if (($colProd->precio)<0) {
                $otros=$otros+($colProd->cantidad*$colProd->precio);
            }
        }
        $impuesto=$sumaParcial*0.16;
        $sumaTotal=$sumaParcial+$impuesto+$otros;
        
        if ($this->variableprueba==false) {
            $record->update([
                'autorizado'=> true,
                'precio_total'=>$sumaParcial,
                'impuesto'=>$impuesto,
                'descuento'=>$otros,
                'p_total_c_imp'=>$sumaTotal,
            ]);
        }
        if ($this->variableprueba==true) {
            $record->update([
                'autorizado'=> false
            ]);
        }
        redirect()->route('compras.index');
    }
}
