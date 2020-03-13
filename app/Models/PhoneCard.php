<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PhoneCard extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $table = "phonecards";

    protected $fillable = ['title', 'phone', 'email', 'info'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logos')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();

    }
}
