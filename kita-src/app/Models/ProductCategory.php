<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assinable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
