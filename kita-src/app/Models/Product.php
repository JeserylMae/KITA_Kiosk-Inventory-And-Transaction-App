<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'brand',
        'category_id',
    ];

    public function category() 
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
