<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandeItem extends Model
{
    use HasFactory;

    protected $fillable=['commande_id','product_id','quantite','price'];

    public function commande():BelongsTo {
        return $this->belongsTo(Commande::class);
    }
    public function product():BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
