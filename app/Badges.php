<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badges extends Model
{
  //
  protected $table='badges';
  protected $primaryKey='id';
  public $timestamps='true';
   protected $fillable = [
      'badges_name','badges_desc', 'course_id','img_url',
  ];
}
