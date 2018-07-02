<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AMBFemenino extends Model
{
    //
    protected $table = 'amb_femenino';
    protected $fillable = ['years','dm3','dm2','dm1','media','d1','d2','d3'];
}
