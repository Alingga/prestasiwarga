<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatawargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawargas', function (Blueprint $table) {
            $table->id();
             $table->string('nik', 100)->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->string('jk', 100);
            $table->string('ttl', 100);
            $table->string('tlp', 15);
            $table->integer('umur');
            $table->string('alamat', 225);
            $table->string('rt', 225);
            $table->timestamps();
        });
        Schema::table('datawargas', function (Blueprint $table) {        

        $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
      ->onDelete('cascade');
        $table->foreign('kelurahan_id')->references('id')->on('kelurahans')->onUpdate('cascade')
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
        Schema::dropIfExists('datawargas');
    }
}
