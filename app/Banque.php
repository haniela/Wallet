<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    protected $fillable = [
        'bank_name',
    ];

   /*  public function wallet()
    {
        return $this->hasMany(\App\Wallet::class);
    } */
}
