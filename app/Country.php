<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  protected $table='countries';
  protected $primaryKey='id';
  public $timestamps='true';
  protected $fillable = [
      'country_name',
  ];

  public function newUsers()
 {
     return $this->hasMany('App\NewUser');
 }

}
