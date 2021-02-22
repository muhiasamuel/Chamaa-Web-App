<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function chamaas()
    {
        return $this->belongsTo(Chamaa::class);
    } 

    public function subscriptions()
    {
        return $this->belongsTo(Subscription::class);
    }

}
