<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use \Carbon\Carbon;

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

    public function canBeCancelled(): bool
    {
        $limitDays      = 2;
        $now            = Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
        $created_at     = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);
        $days           = $created_at->diffInDays($now);
        if($days < $limitDays) {
            return true;
        } else return false;
    
    }
}
