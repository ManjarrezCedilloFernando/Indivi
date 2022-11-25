<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class veterinarias extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable =[
        
        'nombre_completo',
        'telefono',
        'img_perfil',
        'direccion',
        'servicios_id',
    ];
    public function servicios(){
        return $this->belongsTo(servicios::class,'servicios_id','id');
    }
    
}
