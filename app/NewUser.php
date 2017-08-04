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

   public function company()
  {
      return $this->belongsTo('App\Company');
  }

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
    return $this->belongsToMany('App\Course');
}
}
