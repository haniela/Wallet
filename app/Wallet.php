<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'tags','type','amount','file','date','company_id','banque_id',
    ];

    public function banque()
    {
        return $this->belongsTo(\App\Banque::class, 'banque_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(\App\Company::class, 'company_id', 'id');
    }
}
