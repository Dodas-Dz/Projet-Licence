<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulairs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_choix')->nullable();
            $table->foreign('id_choix')->references('id')->on('choixes');
            $table->integer('id_commande')->nullable();
            $table->foreign('id_commande')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulairs');
    }
}
