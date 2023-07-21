<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->smallIncrements("id");
            $table->string("azienda",40);
            $table->string("stazione_di_partenza",50);
            $table->string("stazione_di_arrivo",50);
            $table->time("orario_di_partenza",$precision=0);
            $table->time("orario_di_arrivo",$precision=0);
            $table->string("codice_treno",10);
            $table->tinyInteger("numero_carrozze");
            $table->boolean("in_orario");
            $table->boolean("cancellato");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
