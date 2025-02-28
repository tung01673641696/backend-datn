<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name','image'];

    public function wards() {
        return $this->hasMany(Ward::class);
    }

    public function houses() {
        return $this->hasMany(House::class);
    }
}
