<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table='questions';
    protected $primaryKey='id';
    public $timestamps='false';
     protected $fillable = [
        'quiz_id', 'answer_text',
    ];
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

     public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }

}
