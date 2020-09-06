<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'id', 'title', 'poster_path','overview',
    ];
}
