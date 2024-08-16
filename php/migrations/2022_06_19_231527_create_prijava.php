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
        Schema::create('prijavas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("ime", 64);
            $table->string("prezime", 64);
            $table->string("jmbg", 13);

            $table->unsignedBigInteger("vrsta_id");
            $table->foreign("vrsta_id")->references("id")->on("users");
            
            $table->dateTime("termin");
            $table->integer("status")->default(-1);
        });
        Schema::create('vrstadokumentas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("naziv", 32);
            $table->integer("trajanje");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijavas');
        Schema::dropIfExists('vrstas');
    }
};
