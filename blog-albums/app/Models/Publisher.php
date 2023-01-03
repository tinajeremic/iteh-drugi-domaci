<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';
    use HasFactory;

    public function albums(){
        return $this->hasMany(Album::class);
    }

    protected $fillable = [
        'name',
        'PIB',
    ];
}
