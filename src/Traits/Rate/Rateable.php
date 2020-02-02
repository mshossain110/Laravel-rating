<?php

namespace Nagy\LaravelRating\Traits\Rate;

use Nagy\LaravelRating\Models\Rating;

trait Rateable
{
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
    public function publishedRatings()
    {
        return $this->morphMany(Rating::class, 'rateable')->published();
    }

    public function ratingsAvg()
    {
        return $this->publishedRatings()->avg('value');
    }

    public function ratingsCount()
    {
        return $this->publishedRatings()->count();
    }

    public function getRatingsCountAttribute()
    {
        return $this->publishedRatings->count();
    }

    public function getRatingAvgAttribute()
    {
        return $this->publishedRatings->avg('value');
    }
}