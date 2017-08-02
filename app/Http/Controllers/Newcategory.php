<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newcategory extends Model
{
    //
    protected $table='categories';
    protected $primaryKey='id';
    public $timestamps='true';
     protected $fillable = [
        'category_name',
    ];
}
