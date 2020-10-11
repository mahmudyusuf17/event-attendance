<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'judul',
        'jadwal_acara',
        'lokasi'
    ];
}
