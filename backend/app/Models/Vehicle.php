<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'type_vehicle',
        'license_plate',
        'description',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
