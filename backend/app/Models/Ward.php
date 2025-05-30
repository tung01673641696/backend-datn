<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = ['name','district_id'];

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function houses() {
        return $this->hasMany(House::class);
    }

    public function post(){
        return $this->hasOne(Post::class);
    }
}
