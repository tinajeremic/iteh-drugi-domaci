<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singles extends Model
{
    protected $table='singles';
    use HasFactory;

    protected $fillable =[
        'name',
    ];
}
