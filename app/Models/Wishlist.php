<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'user_id','price'];

    public function product(): BelongsTo{
         return $this->belongsto(Product::class, 'product_id', 'id');
    }

//     public function user(): BelongsTo{
//         return $this->belongsto(User::class, 'user_id', 'id');
//    }
}
