<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'year',
        'make',
        'model',
        'trim',
        'zipcode',
        'ownership',
        'title',
        'tires',
        'battery',
        'starts',
        'mileage',
        'exterior_damage',
        'exterior_parts',
        'mirror_glass_lights',
        'catalytic_converter',
        'interior_parts',
        'flood_fire',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
}
