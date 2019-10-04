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
    protected $fillable = ['nom'];

    /**
     * Retourne tous les équipements
     *
     * @return Equipement Retourne la liste des equipements qui sont dans la BD
     */
    static public function equipements()
    {
        return static::all();
    }
}
