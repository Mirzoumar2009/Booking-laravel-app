<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'capacity', 'type', 'price', 'amenities', 'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
