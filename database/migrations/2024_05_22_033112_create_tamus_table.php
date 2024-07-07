<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->string('uuid_user');
            $table->string('nama');
            $table->string('alamat');
            $table->string('type');
            $table->string('notelp');
            $table->string('jabatan')->nullable();
            $table->timestamps();
            // $table->foreign('uuid_user')->references('uuid')->on('users');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamus');
        
    }
}
