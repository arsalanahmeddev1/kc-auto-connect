<?php

namespace App\Models;

use App\Notifications\NewBidNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'status',
        'amount'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($bid) {
            if (!auth()->user()->hasRole('admin'))
                $bid->user_id = auth()->user()->id;
        });
        static::created(function ($bid) {
            $bid->post->user->notify(new NewBidNotification($bid));
        });
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function acceptedBy()
    {
        return $this->belongsTo(User::class, 'accepted_by');
    }
}
