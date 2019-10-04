<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe qui définie ce qu'est un Équipement
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class Equipement extends Model
{

    /** Retourne tous les équipements */
    static public function equipements()
    {
        return static::all();
    }
}
