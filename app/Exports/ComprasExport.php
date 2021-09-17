<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Sheet;

use PHPExcel;

class ComprasExport implements FromCollection, WithCustomStartCell, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    public $busqueda; 
    public $coincidencias;
    public $contador;
    public $status;
    public $i=1;

    
    public function __construct($busqueda,$coincidencias,$status)
    {
        $this->busqueda=$busqueda;
        $this->coincidencias=$coincidencias;
        $this->status=$status;
    }
    public function collection()
    {
        $coleccionDatos=Compra::where('foliocompra','LIKE','%'.$this->busqueda.'%')
        ->where('autorizado', 1)
        ->where(function($q)
            {
                $q->whereIn('foliocompra', function($q){
                    if ($this->status==null) {
                        $q->select('folio')
                        ->from('status')
                        ->where('estado','!=','cancelado');
                    }
                    else{
                        $q->select('folio')
                        ->from('status')
                        ->where('estado',$this->status);
                    }
                });
            })
        ->orderBy('foliocompra', 'asc')->paginate($this->coincidencias);
        

        
        $this->contador=count($coleccionDatos);
        return $coleccionDatos;
        
    }
    public function map($coleccionDatos): array
    {
        // $coleccionDatos 

        return [
            $this->i++,
            // $coleccionDatos->id,
            $coleccionDatos->foliocompra,
            $coleccionDatos->fecha_emision,
            $coleccionDatos->desc_orden,
            $coleccionDatos->proveedor->nombre_prov,
            $coleccionDatos->precio_total,
            $coleccionDatos->responsable->nombre_resp,
            $coleccionDatos->embarc,
            $coleccionDatos->t_moneda,
            $coleccionDatos->met_pago,
            $coleccionDatos->impuesto,
            $coleccionDatos->descuento,
            $coleccionDatos->p_total_c_imp,
            $coleccionDatos->cot_ref,
            $coleccionDatos->fecha_ref,
            $coleccionDatos->cuenta_cargo,
            $coleccionDatos->fecha_req,
            $coleccionDatos->requisita,
            $coleccionDatos->comentarios,
            $coleccionDatos->envio->dir_envio,
            $coleccionDatos->autorizado,
            $coleccionDatos->status->estado,
            $coleccionDatos->status->fecha,
            $coleccionDatos->created_at,
            $coleccionDatos->updated_at
        ];
    }

    public function startCell(): string
    {
        return 'B2';
    }

    public function headings() :array
    {
        return ["#", "folio", "fecha de emision","descripcion","proveedor","precio total","responsable","embarque","tipo de moneda","metodo de pago","impuestos","descuento","precio total con impuesto","cotizacion referencia","fecha referencia","cuenta cargo","fecha requerido","requisitor","comentarios","envio","autorizado","estado","fecha de estado","creado","actualizado"];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange='B2:Z2';
                $event->sheet->getDelegate()->toArray();
                $event->sheet->getStyle('B2:Z2')->applyFromArray([
                    'font' => [
                        'name' => 'Arial',
                        'size' => 14,
                        'bold' => true,
                        'color' => [
                            'argb' => '336BFF'
                        ],
                    ],
                ]);
                $event->sheet->setCellValue('C'.($this->contador+5), 'TOTAL');
                $event->sheet->setCellValue('D'.($this->contador+5), '=SUM(G3:G'.($this->contador+3) .')');
                $event->sheet->setCellValue('C'.($this->contador+7), 'TOTAL CON IMPUESTO');
                $event->sheet->setCellValue('D'.($this->contador+7), '=SUM(N3:N'.($this->contador+3) .')');
                $event->sheet->setCellValue('C'.($this->contador+6), 'IMPUESTOS');
                $event->sheet->setCellValue('D'.($this->contador+6), '=SUM(L3:L'.($this->contador+3) .')');
                
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '00000000'],
                        ],
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '00000000'],
                        ],
                    ],
                ];
                $event->sheet->getStyle('B2:Z'.($this->contador+2))->applyFromArray($styleArray);
                $event->sheet->getStyle('C'.($this->contador+5) .':D'.($this->contador+7))->applyFromArray($styleArray);
            }];

        }
}