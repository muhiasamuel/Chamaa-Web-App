<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    public $timestamps = false;
    use HasFactory;



     public function members()
  {
      return $this->belongsTo('App\Member');
  }


  
  public function chamaas()
  {
      return $this->belongsTo('App\Chamaa');
  }
}
