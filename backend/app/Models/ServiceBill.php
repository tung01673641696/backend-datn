<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBill extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'month',
        'electric_usage',
        'water_usage',
        'electric_price',
        'water_price',
        'total_amount',
        'status'
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
