<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamaa extends Model
{
    public $timestamps = false;
    use HasFactory;



    public function contributions()
    {
        return $this->hasmany(Contribution::class);
    }



    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }
    public function member()
    {
        return $this->belongsTo('App\Models\Member', 'chamaa_admin_id');
    }
}
