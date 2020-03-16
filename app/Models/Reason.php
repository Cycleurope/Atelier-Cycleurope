<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $table = "reasons";

    protected $fillable = ['name'];

    public function claims()
    {
        // return $this->belongsToMany(Claim::class);
    }
}
