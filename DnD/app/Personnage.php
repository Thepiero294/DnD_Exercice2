<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    static public function personnageExistant()
    {
        return static::all();
    }
}
