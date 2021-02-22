<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    use HasFactory;




    public function contributions()
    {
        return $this->hasmany(Contribution::class);
    }



    public function chamaas()
    {
        return $this->belongsToMany(Chamaa::class);
    }

    public function chamaa()
    {
        return $this->belongsTo('App\Models\Chamaa', 'chamaa_admin_id');
    }
}
