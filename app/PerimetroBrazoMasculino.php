<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerimetroBrazoMasculino extends Model
{
    //
    protected $table = 'perimetro_brazo_masculino';
    protected $fillable = ['id','dm3','dm2','dm1','media','d1','d2','d3'];
}
