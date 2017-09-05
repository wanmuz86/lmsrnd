<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    //
    protected $table='newusers';
    protected $primaryKey='newuser_id';
    public $timestamps='false';
     protected $fillable = [
        'first_name', 'last_name', 'email',  'group_id', 'startdate', 'batch_id', 'company_id', 'country_id',
    ];

    public function country()
   {
       return $this->belongsTo('App\Country');
   }

    public function company(){
      return $this->belongsTo('App\Company');
    }

<<<<<<< HEAD
    public function batch(){
      return $this->belongsTo('App\Batch');
    }

    public function group(){
      return $this->belongsTo('App\Group');
    }

    public function courses(){
      return $this->belongsToMany('App\Course');
    }
=======
  public function batch()
 {
     return $this->belongsTo('App\Batch');
 }
 public function group()
{
    return $this->belongsTo('App\Group');
}
public function courses()
{
    return $this->belongsToMany('App\Course')->withPivot('created_at');
}

public function lessons()
   {
       return $this->belongsToMany('App\Lesson')->withPivot('created_at');
   }
>>>>>>> 492fd952ed3855fcc2965747b4a67eef6abf5e88
}
