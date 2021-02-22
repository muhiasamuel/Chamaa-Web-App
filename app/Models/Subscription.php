<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public $timestamps = false;
    use HasFactory;
     public function purchases()
     {
         return $this->hasMany(Purchase::class);
     }
}
