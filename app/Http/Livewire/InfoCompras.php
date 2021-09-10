<?php

namespace App\Http\Livewire;

use App\Exports\ComprasExport;
use Livewire\Component;
use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class InfoCompras extends Component
{

    public $fechaComp=null;
    public $fechaIni;
    public $fechaEnd;
    public $fechaIni2='2018-01-01';
    public $fechaEnd2='2028-01-01';
    public $provComp;
    public $search;
    public $coincidences;
    private $compraFolios;
    use WithPagination;
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
        if($this->coincidences==null||$this->coincidences=='')
        {
            $varpag=15;
        }
        if($this->coincidences!=null)
        {
            $varpag=$this->coincidences;;
        }
        $yearStart=$this->fechaComp;
        
        $comprasCurr=Compra::where('autorizado', 1)
                                ->whereBetween('created_at', [$dateStart, $dateEnd])
                                ->where('t_moneda', 'like', "Pes".'%')
                                ->where(function($q)
                                {
                                    $q->whereIn('foliocompra', function($q){
                                        $q->select('folio')
                                        ->from('status')
                                        ->where('estado','!=','cancelado');
                                    });
                                })->get();
        $comprasCurrEsp=Compra::where('autorizado', 1)
                                ->whereBetween('created_at', [$this->fechaIni, $this->fechaEnd])
                                ->where('t_moneda', 'like', "Pes".'%')->where(function($q)
                                {
                                    $q->whereIn('foliocompra', function($q){
                                        $q->select('folio')
                                        ->from('status')
                                        ->where('estado','!=','cancelado');
                                    });
                                })->get();
        $provCompras=Compra::where('autorizado',1)->orderBy('prov_prod', 'asc')->
                            where(function($q)
                            {
                                $q->whereIn('foliocompra', function($q){
                                    $q->select('folio')
                                    ->from('status')
                                    ->where('estado','!=','cancelado');
                                });
                            })->get();
        $relprovs=Proveedor::orderBy('id', 'asc')->get();
        $comprasProvs=Compra::where('prov_prod',$this->provComp)
                                ->where('autorizado', 1)->where(function($q)
                                {
                                    $q->whereIn('foliocompra', function($q){
                                        $q->select('folio')
                                        ->from('status')
                                        ->where('estado','!=','cancelado');
                                    });
                                })
                                ->whereBetween('created_at', [$this->fechaIni2, $this->fechaEnd2])
                                ->orderBy('created_at', 'asc')->get();
        $compraFolios=Compra::where('foliocompra','LIKE','%'.$this->search.'%')
                                ->where('autorizado', 1)->where(function($q)
                                {
                                    $q->whereIn('foliocompra', function($q){
                                        $q->select('folio')
                                        ->from('status')
                                        ->where('estado','!=','cancelado');
                                    });
                                })
                                ->orderBy('foliocompra', 'asc')->paginate($varpag); 
        return view('livewire.info-compras', compact('comprasCurr','comprasCurrEsp','dateStart','dateEnd', 'provCompras', 'relprovs', 'comprasProvs','compraFolios'));
    }
    public function export()
    {
        return Excel::download(new ComprasExport($this->search, $this->coincidences),'OrdenesDeCompra.xlsx');
    }
}
