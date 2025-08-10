<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\Inventory;
use App\Models\ProductSupplier;
use App\Models\Transaction;
use App\Models\Delivery;

class Product extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'brand',
        'category_id',
        'created_by',
    ];

    public function category() 
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'product_id');
    }

    public function productSupplier()
    {
        return $this->hasMany(ProductSupplier::class, 'product_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'product_id');
    }
}
