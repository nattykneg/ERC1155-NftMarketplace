<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NftWishlist extends Model
{
    public $timestamps = false;

    public function nftigo()
    {
        return $this->hasOne('App\NftIgo', 'nftId', 'nftId');
    }
}
