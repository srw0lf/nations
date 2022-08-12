<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla con la cual el modelo de relaciona
    protected $table="regions";
    //clave ptimaria de la tabla 
    protected $primaryKey="region_id";
    //anular campos de auditoria 
    public $timestamps=false;
    use HasFactory;

    //Relacion entre region y paises 
    public function paises(){
        return $this->hasMany(Country:: class, 'region_id');
    }
}
