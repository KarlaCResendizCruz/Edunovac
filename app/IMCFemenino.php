<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMCFemenino extends Model
{
    //
    protected $table = 'imc_femenino';
    protected $fillable = ['id','dm3','dm2','dm1','media','d1','d2','d3'];
}
