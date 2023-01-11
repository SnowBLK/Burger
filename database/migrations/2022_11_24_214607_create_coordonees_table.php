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
        Schema::create('coordonees', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_zip');
            $table->string('pays');
            $table->string('num_tel');
            $table->date('date_naissance');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('coordonees');
    }
};
