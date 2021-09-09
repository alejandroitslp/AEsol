<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Productoscompra;
use App\Models\Status;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class TablaAprov extends Component
{
    public $searchDesc;
    public $selectedState;

    use WithPagination;


    public function render()
    {
        
        $aproData=Compra::where('autorizado', 1)->where('desc_orden','LIKE','%'.$this->searchDesc.'%')->orderBy('foliocompra','asc')->paginate(10);
        $estado=Status::all();
        $this->aproProd=Productoscompra::get();
        return view('livewire.tabla-aprov',compact('aproData', 'estado'));
    }

    public function actApr2($foliocompra, $autorizado)
    {
        $record=Compra::where('foliocompra',$foliocompra)->first();
        $status=Status::where('folio',$foliocompra)->first();
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

    public function cancelar($foliocompra)
    {
        if ((Status::where('folio',$foliocompra)->first())!=null) {
            $record2=Status::where('folio',$foliocompra)->first();
            $record2->update([
                'estado'=> 'cancelado']);
        }
        else{
            Status::create([
                'folio' => $foliocompra,
                'estado' => 'cancelado',
                'fecha' => null,
            ]); 
        }         
        
    }

    public function pendiente($foliocompra)
    {
        if ((Status::where('folio',$foliocompra)->first())!=null) {
            $record2=Status::where('folio',$foliocompra)->first();
            $record2->update([
                'estado'=> 'pendiente']);
        }
        else{
            Status::create([
                'folio' => $foliocompra,
                'estado' => 'pendiente',
                'fecha' => null,
            ]); 
        }         
        
    }

    public function entregado($foliocompra)
    {
        if ((Status::where('folio',$foliocompra)->first())!=null) {
            $record2=Status::where('folio',$foliocompra)->first();
            $record2->update([
                'estado'=> 'entregado']);
        }
        else{
            Status::create([
                'folio' => $foliocompra,
                'estado' => 'entregado',
                'fecha' => null,
            ]); 
        }         
        
    }

}
