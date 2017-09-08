<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';
    protected $primaryKey='id';
    public $timestamps='true';
     protected $fillable = [
        'category_name',
    ];

    public function courses()
   {
       return $this->hasMany('App\Course','id');
   }
 }
