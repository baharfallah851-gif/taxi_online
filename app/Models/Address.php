<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
