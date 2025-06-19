<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'phone',
        'role_id',
        'password'
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function houses() {
        return $this->hasMany(House::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function rooms() {
        return $this->hasMany(Room::class, 'renter_id');
    }

    public function rentalRequests() {
        return $this->hasMany(RentalRequest::class);
    }

    public function contracts() {
        return $this->hasMany(Contract::class, 'renter_id');
    }

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
