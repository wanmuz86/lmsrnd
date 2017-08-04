<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  protected $table='groups';
  protected $primaryKey='id';
  public $timestamps='true';
   protected $fillable = [
      'group_name',
  ];

  public function newUsers()
 {
     return $this->hasMany('App\NewUser');
 }

}
