<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AMBMasculino extends Model
{
    //
    protected $table = 'amb_masculino';
    protected $fillable = ['years','dm3','dm2','dm1','media','d1','d2','d3'];
}
