<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'seats', 'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}