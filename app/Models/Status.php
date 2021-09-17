<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    
    protected $primaryKey='id';

    protected $fillable = 
    [
        'id',
        'folio',
        'estado',
        'fecha',
    ];

    /**
     * Get the user that owns the Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'folio', 'foliocompra');
    }
}
