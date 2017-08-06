<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
  //
  protected $table='batches';
  protected $primaryKey='id';
  public $timestamps='true';
   protected $fillable = [
      'batch_name',
  ];

  public function newUsers()
 {
     return $this->hasMany('App\NewUser');
 }

}
