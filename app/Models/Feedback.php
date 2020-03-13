<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";

    protected $fillable = ['content'];

    public $timestamps = false;

    public function masterclass()
    {
        return $this->belongsTo(Masterclass::class);
    }
}
