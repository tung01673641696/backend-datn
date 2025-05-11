<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'room_type',
        'district_id',
        'ward_id',
        'room_type',
        'price',
        'max_people',
        'description',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room(){
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function district(){
        return $this->belongsTo(District::class, 'district_id');
    }

    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}
