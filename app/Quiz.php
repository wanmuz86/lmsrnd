<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
     protected $table='quizes';
    protected $primaryKey='quiz_id';
    public $timestamps='false';
     protected $fillable = [
        'quiz_name', 'quiz_instruction', 'course_id',
    ];
}
