<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'nombre_completo',
        'correo',
        'contraseña',
        'telefono',
        'img_perfil',
    ];
    public function servicios(){
        return $this->hasMany(servicios::class,'servicios_id','id');
    }
    
}
