<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = "families";

    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
