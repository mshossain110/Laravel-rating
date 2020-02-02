<?php

namespace Nagy\LaravelRating\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];

    protected $table = 'ratings';

    public function model()
    {
        return $this->morphTo();
    }

    public function rateable()
    {
        return $this->morphTo();
    }

    public function scopePending($query)
    {
        $query->where('status', 'pending');
    }

    public function scopePublished($query)
    {
        $query->where('status', 'published');
    }

    public function scopeCanceled($query)
    {
        $query->where('status', 'canceled');
    }

    public function scopeInreview($query) {
        $query->where('status', 'inreview');
    }

}