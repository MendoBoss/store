<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'commande_id',
        'product_id',
        'quantite',
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function commande():BelongsTo {
        return $this->belongsTo(Commande::class);
    }
    public function product():BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
