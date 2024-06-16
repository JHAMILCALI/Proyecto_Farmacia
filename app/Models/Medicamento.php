<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $table='medicamentos';
    protected $primaryKey='id';
    protected $filable=['nombre','descripcion','fecha_caducidad','precio','id_proveedor'];
    public $timestamps=false;
}
