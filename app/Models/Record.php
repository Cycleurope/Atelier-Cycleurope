<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Record extends Model
{
    protected $table = "records";

    protected $fillable = ["user_id", "masterclass_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function masterclass()
    {
        return $this->belongsTo(Masterclass::class);
    }

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}
