<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefono extends Model
{
    protected $fillable = [
        'persona_id',
        'numero',
        'tipo',
        'principal',
    ];

    protected $casts = [
        'principal' => 'boolean',
    ];

    public function persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class);
    }
}