<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
  //
  protected $table='certificates';
  protected $primaryKey='id';
  public $timestamps='true';
  protected $fillable = [
      'certificate_title', 'certificate_desc', 'course_id',
  ];

   public function course()
 {
     return $this->belongsTo('App\Course');
 }

}
