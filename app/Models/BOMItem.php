<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BOMItem extends Model
{
    protected $table = 'bom_items';

    public $timestamps = false;

    protected $fillable = ['product_id', 'part_id', 'quantity', 'index', 'info'];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
