<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discord extends Model
{
    protected $table='discord';
    
    protected $fillable = ['*'];
    
    public $timestamps=true;
}
