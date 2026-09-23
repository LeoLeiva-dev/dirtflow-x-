<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persona extends Model
{
    protected $fillable = [
        'nombre',
        'ap1',
        'ap2',
        'identificacion',
        'fecha_nacimiento',
    ];

    public function emails(): HasMany
    {
        return $this->hasMany(Email::class);
    }

    public function telefonos(): HasMany
    {
        return $this->hasMany(Telefono::class);
    }

    public function direcciones(): HasMany
    {
        return $this->hasMany(Direccion::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
