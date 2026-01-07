<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    public $guarded = ['created_at', 'updated_at'];

    protected $table = 'models';

    public function make()
    {
      return $this->belongsTo(Make::class);
    }
}
