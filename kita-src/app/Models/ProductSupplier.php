<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Store;
use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'supplier_id',
        'owner_id',
        'product_id',
        'store_id',
    ];

     /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'supplier_id' => 'integer',
            'owner_id' => 'integer',
            'product_id' => 'integer',
            'store_id' => 'integer',
        ];
    }

    public function supplier() 
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function store() 
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
