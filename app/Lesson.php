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
      'lesson_name', 'Lesson_desc', 'course_id','module_id',
  ];
  public function course()
   {
     return $this->belongsTo('App\Course');
   }
  public function module()
   {
    return $this->belongsTo('App\Module');
   }
}
