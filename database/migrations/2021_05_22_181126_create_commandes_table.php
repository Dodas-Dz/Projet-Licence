<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',20);
            $table->string('couleur',10);
            $table->string('couleur1',20);
            $table->string('tamplate',20);
            $table->string('type',20);
            $table->string('police',20);
            $table->Text('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('packes_id')->unsigned();
            $table->foreign('packes_id')->references('id')->on('packes');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
          
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
