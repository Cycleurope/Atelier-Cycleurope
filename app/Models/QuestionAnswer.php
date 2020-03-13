<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    
    protected $table = "questions_answers";

    protected $fillable = ['question', 'answer', 'position'];

    public $timestamps = false;

}
