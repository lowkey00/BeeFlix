<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // use HasFactory;
    protected $table = 'genres';
    public function movie() {
        return $this->hasMany('App\Models\Movie');
    }
}
