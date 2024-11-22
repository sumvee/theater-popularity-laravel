<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre', 'duration'];

    public function showtimes()
    {
        return $this->hasMany(ShowTime::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
