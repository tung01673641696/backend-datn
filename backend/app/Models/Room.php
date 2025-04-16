<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['house_id','room_type','name','floor','price','price_deposit','area','user_number','image','description','is_vailable'];

    public function house() {
        return $this->belongsTo(House::class);
    }

    public function tenants() {
        return $this->hasMany(Tenant::class);
    }
    public function post(){
        return $this->hasOne(Post::class, 'room_id');
    }
}
