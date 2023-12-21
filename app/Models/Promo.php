<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'percentage', 'event_id'
    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
