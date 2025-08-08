<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string> 
     */
    protected $fillable = [
        'seller_id', 
        'product_id',
        'quantity',
        'selling_price',
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
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
