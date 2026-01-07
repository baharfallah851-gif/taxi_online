<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }


    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
