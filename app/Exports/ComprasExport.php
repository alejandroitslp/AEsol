<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Compra;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Sheet;

use PHPExcel;

class ComprasExport implements FromCollection, WithCustomStartCell, WithHeadings, ShouldAutoSize, WithEvents
{
    public $busqueda; 
    public $coincidencias;
    public $contador;

    
    public function __construct($busqueda,$coincidencias)
    {
        $this->busqueda=$busqueda;
        $this->coincidencias=$coincidencias;
    }
    public function collection()
    {
        
        $coleccionDatos=Compra::where('foliocompra','LIKE','%'.$this->busqueda.'%')
        ->where('autorizado', 1)
        ->orderBy('foliocompra', 'asc')->paginate($this->coincidencias); 
        $this->contador=count($coleccionDatos);
        return $coleccionDatos;
        
    }
    public function startCell(): string
    {
        return 'B2';
    }

    public function headings() :array
    {
        return ["id", "folio", "fecha de emision","descripcion","proveedor","precio total","responsable","embarque","tipo de moneda","metodo de pago","impuestos","descuento","precio total con impuesto","cotizacion referencia","fecha referencia","cuenta cargo","fecha requerido","requisitor","comentarios","envio","autorizado","creado","actualizado"];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange='B2:W2';
                $event->sheet->getDelegate()->toArray();
                $event->sheet->getStyle('B2:X2')->applyFromArray([
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
                $event->sheet->getStyle('B2:X'.($this->contador+2))->applyFromArray($styleArray);
                $event->sheet->getStyle('C'.($this->contador+5) .':D'.($this->contador+7))->applyFromArray($styleArray);
            }];

        }
}