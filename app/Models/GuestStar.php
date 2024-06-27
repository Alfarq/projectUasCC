<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestStar extends Model
{
    use HasFactory;

    protected $fillable = [
        'concert_id', 'name', 'image',
    ];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
