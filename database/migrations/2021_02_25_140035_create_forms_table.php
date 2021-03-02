<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('ktpnik');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('jkelamin');
            $table->string('kebangsaan');
            $table->string('alamatrumah');
            $table->string('kodepos');
            $table->string('tlpnrumah');
            $table->string('tlpnkantor');
            $table->string('tlpnhp');
            $table->string('email');
            $table->string('pendidikan');
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->string('alamatkantor');
            $table->string('kodeposkantor');
            $table->string('nokantor');
            $table->string('fax');
            $table->string('emailkantor');
            $table->string('judul');
            $table->string('nomor');
            $table->string('asesmen');
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
        Schema::dropIfExists('forms');
    }
}
