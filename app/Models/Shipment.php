<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    protected $fillable = [
        'order_id',
        'provincia',
        'canton',
        'distrito',
        'detalle',
        'transportista',
        'numero_guia',
        'estado',
        'enviado_at',
        'entregado_at',
    ];

    protected $casts = [
        'enviado_at' => 'datetime',
        'entregado_at' => 'datetime',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
