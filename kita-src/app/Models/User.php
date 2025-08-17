<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use App\Models\Inventory;
use App\Models\ProductSupplier;
use App\Models\Transaction;
use App\Models\Delivery;
use App\Models\Store;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',

        'house_number',
        'street',
        'barangay',
        'city',
        'postal_code',
        'province',

        'role',

        'email',
        'password',
        'contact_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'seller_id');
    }

    public function productSupplier()
    {
        return $this->hasMany(ProductSupplier::class, 'seller_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'seller_id');
    }

    public function store() 
    {
        return $this->hasMany(Store::class, 'owner_id');
    }

    public function hasAnyRole(...$roles)
    {
        if (count($roles) === 1 && is_array($roles[0])) {
            $roles = $roles[0];
        }
        return in_array($this->role, $roles, true);
    }
}
