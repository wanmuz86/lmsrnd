<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $table='modules';
    protected $primaryKey='id';
    public $timestamps='true';
    protected $fillable = [
        'module_title', 'module_desc', 'course_id',
    ];
    public function course()
   {
       return $this->belongsTo('App\Course');
   }

}
