<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    function make()
    {
        return $this->belongsTo(Make::class);
    }

    function model()
    {
        return $this->belongsTo(Modele::class);
    }
}
