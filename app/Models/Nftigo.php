<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nftigo extends Model
{
    protected $dates = ['endDate'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
}
