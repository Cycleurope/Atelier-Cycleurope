<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $table = "claims";

    protected $fillable = ['reason_id', 'description', 'sku', 'mmitno', 'mmitds', 'brand_id', 'component_serial', 'user_id', 'product_id'];

    public function reason()
    {
        return $this->hasOne(Reason::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
