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
    protected $fillable = ['nom', 'force', 'dexterite', 'constitution', 'intelligence', 'sagesse', 'charisme'];

    /**
     * Retourne la liste des personnages existants
     *
     * @return Personnage Retourne la liste des personnages
     */
    static public function personnageExistant()
    {
        return static::all();
    }
}
