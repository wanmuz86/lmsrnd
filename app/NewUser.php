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
}
