<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;

    protected $fillable = ['theater_id', 'movie_id', 'showtime'];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
