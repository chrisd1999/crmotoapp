<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabes = [
        'name',
        'description',
        'date_begin',
        'date_end',
        'track_id',
    ];

    protected $dates = [
        'date_begin',
        'date_end',
    ];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
