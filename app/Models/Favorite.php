<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable= [
        'user_id',
        'product_id',
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function product():BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
