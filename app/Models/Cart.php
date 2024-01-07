<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'user_id', 'price', 'quantity', 'amount'];


    public function product(): BelongsTo{
        return $this->belongsto(Product::class, 'product_id', 'id');
   }
}
