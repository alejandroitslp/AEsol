<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Compra;
use Carbon\Carbon;

class InfoCompras extends Component
{

    public $fechaComp;

    public function mount()
    {
        

    }

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
        return view('livewire.info-compras', compact('comprasCurr','dateStart','dateEnd'));
    }
}
