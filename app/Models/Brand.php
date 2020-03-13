<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;

class Brand extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = "brands";

    protected $fillable = ['name', 'description'];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function documentsBadge()
    {
        if($this->documents()->count() > 0):
            return '<div class="badge badge-info">'.$this->documents->count().'</div>';
        else:
            return '<div class="badge badge-light">Aucun document</div>';
        endif;
    }

    public function videosBadge()
    {
        if($this->videos()->count() > 0):
            return '<div class="badge badge-info">'.$this->videos->count().' <i class="mdi mdi-video-vintage"><i></div>';
        else:
            return '<div class="badge badge-secondary">0 <i class="mdi mdi-video-vintage"><i></div>';
        endif;
    }

    // Spatie Media Library

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logos')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();
    }

    public function hasLogo()
    {
        if(count($this->getMedia('logos')) > 0) {
            return true;
        } else {
            return false;
        }
    }

}
