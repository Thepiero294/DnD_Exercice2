<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['nom'];

    static public function equipements()
    {
        return static::all();
    }
}
