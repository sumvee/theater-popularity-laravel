<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'showtime_id', 'seat_number', 'price'];

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
