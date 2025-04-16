<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id','title','district_id','ward_id','room_type','price','max_people','description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
