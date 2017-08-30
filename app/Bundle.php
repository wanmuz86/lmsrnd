<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
  //
  protected $table='bundles';
  protected $primaryKey='id';
  public $timestamps='true';
   protected $fillable = [
      'bundle_name',
  ];

  public function courses()
 {
     return $this->hasMany('App\Course');
 }
}
