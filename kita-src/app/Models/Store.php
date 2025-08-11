<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Store extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     * 
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'street',
        'barangay',
        'city',
        'postal_code',
        'province',
        'contact_number',
        'owner_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
