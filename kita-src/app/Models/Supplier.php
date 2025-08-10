<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSupplier;
use App\Models\Delivery;

class Supplier extends Model
{
    public $timestamps = false;

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
        'email',
        'contact_number',
    ];

    public function productSupplier()
    {
        return $this->hasMany(ProductSupplier::class, 'supplier_id');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'supplier_id');
    }
}
