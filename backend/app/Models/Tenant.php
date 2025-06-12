<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','room_id','identity_number','note'];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function house() {
        return $this->belongsToThrough(House::class, Room::class);
    }

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

        public function contracts() {
        return $this->hasMany(Contract::class);
    }

}
