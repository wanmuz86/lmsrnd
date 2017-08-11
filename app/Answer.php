<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table='answers';
    protected $primaryKey='id';
    public $timestamps='false';
     protected $fillable = [
        'answer_text', 'question_id',
    ];
    public function quiz()
    {
        return $this->belongsTo('App\Question');
    }
}
