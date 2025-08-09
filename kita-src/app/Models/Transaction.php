<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * 
     * @var lits<string>
     */
    protected $fillable = [
        'product_id',
        'user_id', 
        'transaction_datetime',
        'selling_price',
        'purchase_price',
        'quantity',
        'transaction_type',
    ];

    public function casts(): array 
    {
        return [
            'selling_price' => 'float',
            'purchase_price' => 'float',
            'quantity' => 'integer',
            'transaction_datetime' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo('users');
    }

    public function product()
    {
        return $this->belongsTo('products');
    }
}
