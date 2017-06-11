<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iban extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'iban_number';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
