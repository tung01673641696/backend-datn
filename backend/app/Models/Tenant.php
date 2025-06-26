<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','phone','room_id','identity_number','note'];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function house() {
        return $this->belongsToThrough(House::class, Room::class);
    }

    public function contracts() {
        return $this->hasMany(Contract::class);
    }

}
