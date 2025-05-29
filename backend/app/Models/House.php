<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = 
    ['name',
    'address',
    'user_id',
    'district_id',
    'ward_id',
    'electric_price',
    'water_price',
    'service_record_day',
    'service_cal_day'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }
}
