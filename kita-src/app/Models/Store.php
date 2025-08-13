<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Inventory;
use App\Models\ProductSupplier;
use App\Models\Transaction;

class Store extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'street',
        'barangay',
        'city',
        'postal_code',
        'province',
        'contact_number',
        'owner_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function inventory() 
    {
        return $this->hasMany(Inventory::class, 'store_id');
    }

    public function productSupplier()
    {
        return $this->hasMany(ProductSupplier::class, 'store_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'store_id');
    }
}
