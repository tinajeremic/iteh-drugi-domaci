<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table='artists';
    use HasFactory;

    public function albums(){
        return $this->hasMany(Album::class);
    }

    protected $fillable = [
        'name',
        'country',
    ];
}
