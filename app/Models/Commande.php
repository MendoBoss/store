<?php

namespace App\Models;

use App\Models\User;
use App\Models\Panier;
use App\Models\CommandeItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero',
        'total',
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function commandeItems():HasMany {
        return $this->belongsTo(CommandeItem::class);
    }
}
