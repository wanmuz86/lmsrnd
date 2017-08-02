<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newstudent extends Model
{
    //
    protected $table='students';
    protected $primaryKey='student_id';
    public $timestamps='false';
     protected $fillable = [
        'first_name', 'last_name', 'email', 'startdate', 'batch_id', 'company_id', 'country_id',
    ];
}
