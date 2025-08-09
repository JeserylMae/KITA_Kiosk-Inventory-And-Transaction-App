<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Product;

class Delivery extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'seller_id',
        'supplier_id', 
        'product_id',
        'quantity',
        'delivery_date',
        'wholesale_price',
    ];

    public function casts(): array
    {
        return [
            'quantity' => 'integer',
            'delivery_date' => 'datetime',
            'wholesale_price' => 'float',
        ];
    }

    public function user() 
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
