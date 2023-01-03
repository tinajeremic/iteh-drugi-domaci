<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table='albums';
    use HasFactory;

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    protected $fillable=[
        'title',
        'description',
        'tracklist',
        'artist_id',
        'genre_id',
        'publisher_id',
    ];
}
