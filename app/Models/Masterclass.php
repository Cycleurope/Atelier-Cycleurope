<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendee;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Auth;

class Masterclass extends Model implements HasMedia
{
    use InteractsWithMedia;
    use Favoriteable;
    
    protected $table = "masterclasses";

    protected $fillable = [
        'title',
        'summary',
        'program',
        'price',
        'location',
        'information',
        'max_attendees',
        'status',
        'starts_at',
        'ends_at',
        'records_start_at',
        'published_at'
    ];

    public $timestamps = false;

    public function period()
    {
        $starts_at      = $this->starts_at;
        $ends_at        = $this->ends_at;

        if($ends_at === $starts_at):
            $period = $starts_at;
        else:
            $period = "Du $starts_at <br />au $ends_at";
        endif;

        return $period;
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function scopeArchive($q)
    {
        return $q->where('ends_at', '<', date('Y-m-d H:i:s'));
    }

    public function attendees()
    {
        return Attendee::whereHas('record', function($q) {
            $q->where('masterclass_id', $this->id);
        })->get();
    }

    public function hasAttendeesFromMine()
    {
        $attendees = Attendee::whereHas('record', function($q) {
            $q->where('masterclass_id', $this->id);
            $q->where('user_id', Auth::user()->id);
        })->get();

        if(count($attendees) > 0):
            return true;
        else:
            return false;
        endif;
    }

    public function attendeesFromMine()
    {
        $attendees = Attendee::whereHas('record', function($q) {
            $q->where('masterclass_id', $this->id);
            $q->where('user_id', Auth::user()->id);
        })->get();

        return $attendees;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('desktop_covers')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();

        $this->addMediaCollection('mobile_covers')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();
    }

    public function publishStatusBadge()
    {
        $now = date('Y-m-d');
        if($this->published_at != null) {
            if($this->published_at <= $now) {
                return '<span class="badge badge-success">Publiée</span>';
            } else {
                return '<span class="badge badge-danger">Bientôt disponible ('.$this->published_at.')</span>';
            }
        } else {
            return '<span class="badge badge-success">Publiée automatiquement</span>';
        }
    }

    public function recordsStatusBadge()
    {
        $now = date('Y-m-d');
        if($this->records_start_at != null) {
            if($this->records_start_at <= $now) {
                return '<span class="badge badge-success">Enregistrements Ouverts</span>';
            } else {
                return '<span class="badge badge-danger">Bientôt Ouvert ('.$this->records_start_at.')</span>';
            }
        } else {
            return '<span class="badge badge-success">Enregistrements ouverts automatiquement</span>';
        }
    }

}
