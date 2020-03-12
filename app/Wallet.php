<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'tags','type','amount','file','date','company_id','banque_id',
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('tags', 'like', '%'.$query.'%')
                ->orWhere('type', 'like', '%'.$query.'%');
    }

    public function banque()
    {
        return $this->belongsTo(\App\Banque::class, 'banque_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(\App\Company::class, 'company_id', 'id');
    }
}
