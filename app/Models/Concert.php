<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'organizer', 'guest_star', 'concert_date', 'locations', 'description', 'image', 'link_ticket'
    ];

    public function guestStars()
    {
        return $this->hasMany(GuestStar::class);
    }
}
