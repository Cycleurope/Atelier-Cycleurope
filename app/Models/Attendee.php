<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = "attendees";

    protected $filable = ['firstname', 'lastname', 'email', 'phone', 'record_id'];

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
