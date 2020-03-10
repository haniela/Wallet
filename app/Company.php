<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
    ];

   /*  public function wallet()
    {
        return $this->hasMany(\App\Wallet::class);
    } */
}
