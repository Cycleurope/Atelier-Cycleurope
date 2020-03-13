<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    
    public $timestamps = false;
    protected $table = 'parts';

    protected $fillable = [
        'mmitno',        // reference produit
        'mmitds',             // designation
        'index',
    ];

    public function bomitems()
    {
        return $this->hasMany(BOMItem::class);
    }

}
