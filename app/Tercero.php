<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $fillable = [
    	'primerNombre', 
    	'segundoNombre', 
    	'primerApellido', 
    	'segundoApellido', 
    	'numeroDocumento', 
    	// 'siCredito', 
    	'valorMaxCredito', 
    	// 'activo'
    ];
}
