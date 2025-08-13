<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Product;
use App\Models\Store;

class Inventory extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string> 
     */
    protected $fillable = [
        'user_id', 
        'product_id',
        'quantity',
        'selling_price',
        'expiry_date',
        'store_id',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'integer',
            'selling_price' => 'float',
            'expiry_date' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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
