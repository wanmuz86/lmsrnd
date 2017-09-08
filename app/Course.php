<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table='courses';
    protected $primaryKey='id';
    public $timestamps='true';
    protected $fillable = [
        'category_id', 'course_name', 'course_desc', 'is_active', 'activation_date', 'end_date', 'trainer_id', 'course_logo', 'price',
    ];
    
    public function category()
   {
       return $this->belongsTo('App\Category','id');
   }
   public function newUsers()
   {
       return $this->belongsToMany('App\NewUser','id');
   }
}
