<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'images',
    ];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function paniers():HasMany {
        return $this->belongsTo(Panier::class);
    }
}
