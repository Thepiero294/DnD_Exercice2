<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['nom'];

    static public function equipement()
    {
        return static::all();
    }
}
