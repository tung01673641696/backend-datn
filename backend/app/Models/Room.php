<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [   'house_id',
        'room_type',
        'name',
        'floor',
        'price',
        'price_deposit',
        'area',
        'user_number',
        'image',
        'description',
        'status',
        'renter_id'
    ];
    
    public function house() {
        return $this->belongsTo(House::class);
    }

    public function tenants() {
        return $this->hasMany(Tenant::class);
    }
    public function post() {
        return $this->hasOne(Post::class, 'room_id');
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rentalRequests() {
        return $this->hasMany(RentalRequest::class);
    }

    public function contract() {
        return $this->hasOne(Contract::class);
    }

    public function serviceBills() {
        return $this->hasMany(ServiceBill::class);
    }

    public function currentTenant() {
        return $this->hasOne(Tenant::class)->latest(); // hoặc thêm điều kiện where nếu có
    }
}
