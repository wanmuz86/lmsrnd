<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  //
  protected $table='lessons';
  protected $primaryKey='id';
  public $timestamps='true';
  protected $fillable = [
      'lesson_name', 'Lesson_desc', 'course_id','startdate','module_id'
  ];

}
