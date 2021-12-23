<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;
    protected $table = 'movies';
    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }
    public function episode() {
        return $this->hasMany('App\Models\Episode');
    }
}
