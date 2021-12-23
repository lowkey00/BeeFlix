<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // use HasFactory;
    protected $tabel = 'episodes';
    public function movie() {
        return $this->belongsTo('App\Models\Movie');
    }
}
