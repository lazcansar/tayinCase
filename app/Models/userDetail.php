<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    //
    protected $table = 'user_details';
    protected $fillable = ["users_id", "name", "surname", "email", "company", "phone", "address", "vac", "kadro", "startyear"];
}
