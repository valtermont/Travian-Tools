<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OPS extends Model
{
    //
    
    protected $table='opsplan';
    
    protected $fillable = [
        '*'
    ];
    
    public $timestamps=true;
}
