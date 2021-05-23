<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 20);
            $table->char('type', 20);
            $table->char('coulleur', 20);
            $table->char('police', 20);
            $table->integer('pack_id')->unsigned();
            $table->foreign('pack_id')->references('id')->on('packes');
            $table->integer('template_id')->unsigned();
            $table->foreign('template_id')->references('id')->on('templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulaires');
    }
}
