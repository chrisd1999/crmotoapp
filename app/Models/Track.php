<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
