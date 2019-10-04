<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe qui définie ce qu'est un Personnage
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class Personnage extends Model
{
    /** Retourne la liste des personnages existants */
    static public function personnageExistant()
    {
        return static::all();
    }
}
