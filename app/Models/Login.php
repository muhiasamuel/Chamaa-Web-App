<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;


    protected $fillable = [
        'last_login_at',
        'last_login_ip',
       'credentials',
    ];

}
