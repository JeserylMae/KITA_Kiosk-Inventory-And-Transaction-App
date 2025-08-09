<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /**
     * The attributes that are mass assinable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
