<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class EventListing extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'event_listings';

    protected $appends = [
        'photo',
    ];

    protected $dates = [
        'event_start_date',
        'event_end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'event_name',
        'event_description',
        'event_category_id',
        'language',
        'event_start_date',
        'event_end_date',
        'eventsponsors',
        'location',
        'facebook_link',
        'twitter_link',
        'linkedin',
        'google_link',
        'youtube_link',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function event_category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getEventStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEventStartDateAttribute($value)
    {
        $this->attributes['event_start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEventEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEventEndDateAttribute($value)
    {
        $this->attributes['event_end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
