<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cambe extends Model
{
    //
    protected $table='cambes';
    protected $primaryKey='id';
    public $timestamps='true';
     protected $fillable = [
        'cambe_name',
    ];

  
 }
