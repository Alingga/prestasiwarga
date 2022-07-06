<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
           
            $table->bigInteger('datawarga_id')->unsigned();
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('prestasi', 100);
            $table->string('Validasi', 100);
            $table->string('image')->nullable();
            $table->timestamps();
        });

         Schema::table('prestasis', function (Blueprint $table) {        
      $table->foreign('datawarga_id')->references('id')->on('datawargas')->onUpdate('cascade')
      ->onDelete('cascade');
      $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdate('cascade')
      ->onDelete('cascade');

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
}
