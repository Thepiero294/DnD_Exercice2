<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $fillable = ['nom', 'force', 'dexterite', 'constitution', 'intelligence', 'sagesse', 'charisme'];

    static public function personnageExistant()
    {
        return static::all();
    }
}
