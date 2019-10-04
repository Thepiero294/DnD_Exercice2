<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Classe de migrations qui crée la table d'équipements dans la base de donnée
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class CreateEquipementsTable extends Migration
{
    /**
     * Roule les migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_equipement', 100);
            $table->bigInteger('personnage_id')->unsigned();
            $table->foreign('personnage_id')->references('id')->on('personnages')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Renverse les migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipements');
    }
}
