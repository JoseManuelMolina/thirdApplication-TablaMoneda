<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;
    
    //hay que declarar las variables de instancia
    //nombre de la tabla, obligatorio
    protected $table = 'moneda';
    
    //nombre del campo que forma la primary key -> id autonumérico 
    //protected $primaryKey = 'idMoneda';
    
    //fechad de creacion del registro, fecha de la última edición del registro, predeterminado true
    public $timestamps = false;
    
    protected $fillable = ['nombre', 'simbolo', 'pais', 'cambio', 'fechaCreacion'];
    
}
