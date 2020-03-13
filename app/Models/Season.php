<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = "seasons";

    protected $fillable = ['name', 'year'];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
