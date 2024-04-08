<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'CIF',
        'nombre',
        'direccion',
        'imagen'
    ];

    public function formularios(): HasMany
    {
        return $this->hasMany(Formulario::class);
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }
}
