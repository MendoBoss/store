<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use App\Models\Commande;
use App\Models\Favorite;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // filament access
    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->role, 'admin');
    }

    
    public function commandes(): HasMany {
        return $this->hasMany(Commande::class);
    }

    public function favorites(): HasMany {
        return $this->hasMany(Favorite::class);
    }
    public function isFavorites() {
        return $this->hasMany(Favorite::class);
    }

    
    // public function canAccessPanel(Panel $panel): bool
    // {
    //     if ($panel->getId() === 'admin') {
    //         if ($this->role === 'admin') {
    //             return true;
    //         } else {
    //             // Afficher un message d'erreur ou lever une exception
    //             abort(403, 'Accès refusé : Vous devez être administrateur pour accéder à ce panneau.');
    //     }
    //     }
    //     // Si ce n'est pas le panel admin, tout le monde peut y accéder
    //     return redirect()->back();
    // }
}
