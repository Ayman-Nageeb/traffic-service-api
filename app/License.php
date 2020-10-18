<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}
