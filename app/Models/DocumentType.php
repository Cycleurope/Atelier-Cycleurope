<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = "doctypes";

    protected $fillable = ['name', 'slug'];

    public function documents()
    {
        return $this->hasMany(Document::class, 'doctype_id', 'id');
    }
}
