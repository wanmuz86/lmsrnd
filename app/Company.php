<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table='companies';
  protected $primaryKey='id';
  public $timestamps='true';
  protected $fillable = [
      'company_name',
    ];

    public function newUsers()
   {
       return $this->hasMany('App\NewUser');
   }

}
