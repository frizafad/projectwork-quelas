<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kelas');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas');
            $table->foreign('id_user')->references('id')->on('users')->onDelet('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_users');
    }
}
