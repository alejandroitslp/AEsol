<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Compra;
use App\Models\Proveedor;
use Carbon\Carbon;

class InfoCompras extends Component
{

    public $fechaComp;
    public $fechaIni;
    public $fechaEnd;
    public $fechaIni2='2018-01-01';
    public $fechaEnd2='2028-01-01';
    public $provComp;


    public function render()
    {
        if ($this->fechaComp==null||$this->fechaComp==1) {
            $dateStart=Carbon::now()->startOfDay()->format('d/m/y H:i:s');
            $dateEnd=Carbon::now()->endOfDay()->format('d/m/y H:i:s');
        }
        if ($this->fechaComp==2) {
            $dateStart=Carbon::now()->startOfWeek()->format('d/m/y');
            $dateEnd=Carbon::now()->endOfWeek()->format('d/m/y');
        }
        if ($this->fechaComp==3) {
            $dateStart=Carbon::now()->startOfMonth()->format('d/m/y');
            $dateEnd=Carbon::now()->endOfMonth()->format('d/m/y');
        }
        if ($this->fechaComp==4) {
            $dateStart=Carbon::now()->startOfYear()->format('d/m/y');
            $dateEnd=Carbon::now()->endOfYear()->format('d/m/y');
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
