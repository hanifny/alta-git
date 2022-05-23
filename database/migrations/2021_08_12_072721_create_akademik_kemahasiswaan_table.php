<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkademikKemahasiswaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akademik_kemahasiswaan', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->nullable();
            $table->integer('no_reg')->nullable();
            $table->string('nama')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('kelas')->nullable();
            $table->integer('tahun_daftar')->nullable();
            $table->integer('semester_daftar')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('agama')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('kode_warga_negara')->nullable();
            $table->string('warga_negara')->nullable();
            $table->text('alamat_kuliah')->nullable();
            $table->string('telp_kuliah')->nullable();
            $table->text('alamat_tetap')->nullable();
            $table->string('telp_tetap')->nullable();
            $table->text('alamat_darurat')->nullable();
            $table->string('telp_darurat')->nullable();
            $table->text('alamat_penanggung_jawab')->nullable();
            $table->string('telp_penanggung_jawab')->nullable();
            $table->string('asal_slta')->nullable();
            $table->string('pendidikan_sarjana')->nullable();
            $table->string('prodi_sarjana')->nullable();
            $table->string('pendidikan_magister')->nullable();
            $table->string('prodi_magister')->nullable();
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
        Schema::dropIfExists('akademik_kemahasiswaan');
    }
}
