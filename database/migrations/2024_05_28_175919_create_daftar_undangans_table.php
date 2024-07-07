<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('daftar_undangans', function (Blueprint $table) {
                $table->id();
                $table->string('uuid_dtamu');
                $table->string('uuid_user');
                $table->string('nama_tamu');
                $table->string('alamat_tamu');
                $table->string('notelp_tamu');
                $table->string('type_tamu');
                $table->string('jab_tamu')->nullable();
                $table->timestamps();
                // $table->foreign('uuid_dtamu')->references('uuid')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_undangans');
    }
}
