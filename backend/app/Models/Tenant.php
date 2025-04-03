<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','room_id','note'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function house()
    {
        return $this->belongsToThrough(House::class, Room::class);
    }
}
