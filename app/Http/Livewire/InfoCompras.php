<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Compra;
use App\Models\Proveedor;
use Carbon\Carbon;

class InfoCompras extends Component
{

    public $fechaComp=null;
    public $fechaIni;
    public $fechaEnd;
    public $fechaIni2='2018-01-01';
    public $fechaEnd2='2028-01-01';
    public $provComp;
 

    public function render()
    {
        if ($this->fechaComp==null) {
            $dateStart=Carbon::now()->startOfDay();
            $dateEnd=Carbon::now();
        }
        if ($this->fechaComp==1) 
        {
            $dateStart=Carbon::now()->startOfDay();
            $dateEnd=Carbon::now();
        }
        if ($this->fechaComp==2) {
            $dateStart=Carbon::now()->startOfWeek();
            $dateEnd=Carbon::now();
        }
        if ($this->fechaComp==3) {
            $dateStart=Carbon::now()->startOfMonth();
            $dateEnd=Carbon::now()->endOfMonth();
        }
        if ($this->fechaComp==4) {
            $dateStart=Carbon::now()->startOfYear();
            $dateEnd=Carbon::now()->endOfYear();
        }


        $yearStart=$this->fechaComp;
        $comprasCurr=Compra::where('autorizado', 1)
                                ->whereBetween('created_at', [$dateStart, $dateEnd])
                                ->where('t_moneda', 'like', "Pes".'%')->get();
        $comprasCurrEsp=Compra::where('autorizado', 1)
                                ->whereBetween('created_at', [$this->fechaIni, $this->fechaEnd])
                                ->where('t_moneda', 'like', "Pes".'%')->get();
        $provCompras=Compra::where('autorizado',1)->orderBy('prov_prod', 'asc')->get();
        $relprovs=Proveedor::orderBy('id', 'asc')->get();
        $comprasProvs=Compra::where('prov_prod',$this->provComp)
                                ->whereBetween('created_at', [$this->fechaIni2, $this->fechaEnd2])
                                ->orderBy('created_at', 'asc')->get();
        return view('livewire.info-compras', compact('comprasCurr','comprasCurrEsp','dateStart','dateEnd', 'provCompras', 'relprovs', 'comprasProvs'));
    }
}
