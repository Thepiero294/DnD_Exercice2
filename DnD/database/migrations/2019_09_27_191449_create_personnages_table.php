<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Classe de migration qui crée une table de personnage
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class CreatePersonnagesTable extends Migration
{
    /**
     * Roule les migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->unique();
            $table->string('nom',100);
            $table->integer('force');
            $table->integer('dexterite');
            $table->integer('constitution');
            $table->integer('intelligence');
            $table->integer('sagesse');
            $table->integer('charisme');
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
        Schema::dropIfExists('personnages');
    }
}
