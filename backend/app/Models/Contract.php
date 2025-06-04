<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'renter_id', 
        'room_id', 
        'type', 
        'amount', 
        'start_date', 
        'end_date', 
        'note', 
        'status'
    ];

    public function renter() {
        return $this->belongsTo(User::class, 'renter_id');
    }

    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
