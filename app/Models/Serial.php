<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $table = "serials";

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
