<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 'description', 'start_date', 'end_date', 'banner'
    ];

    public function promos()
    {
        return $this->hasMany(Promo::class, 'event_id');
    }
}
