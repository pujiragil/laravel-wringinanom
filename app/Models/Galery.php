<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable =  [
        'name',
        'photo_path',
    ];
}
