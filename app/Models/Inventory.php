<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = [
        'product_id',
        'cantidad',
        'stock_minimo',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}