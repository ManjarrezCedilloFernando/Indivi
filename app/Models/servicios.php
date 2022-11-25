<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class servicios extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'nombre_completo',
        'descripcion',
        'tipo',
        'precio',
        'clave',
        'usuarios_id',
    ];
    public function veterinarias(){
    return $this->hasMany(veterinarias::class,'veterinarias_id','id');    
    }
    public function usuarios(){
    return $this->belongsTo(usuarios::class,'usuarios_id','id');    
        }
    
}
