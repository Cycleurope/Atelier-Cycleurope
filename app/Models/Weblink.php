<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weblink extends Model
{
    
    protected $table = "weblinks";

    protected $fillable = ['name', 'url', 'position'];

}
