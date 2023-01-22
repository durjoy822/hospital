<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;
    protected $table = 'shipping_addresses';

    protected $fillable = [
        'user_id',
        'name',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'phone_number',
        'is_default',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
