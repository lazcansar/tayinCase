<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changeticket extends Model
{
    //
    use HasFactory;
    protected $table = 'changetickets';
    protected $fillable = ['user_id', 'city_id', 'changetype', 'message'];

    // Bir talep bir kullanıcıya aittir
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Bu talep bir şehre aittir
    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
