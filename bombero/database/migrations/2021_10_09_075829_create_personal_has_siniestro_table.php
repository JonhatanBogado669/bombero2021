<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalHasSiniestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_has_siniestro', function (Blueprint $table) {
            $table->foreignId('personal_id')->constrained('personal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('siniestro_id')->constrained('siniestro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('personal_has_siniestro');
    }
}
