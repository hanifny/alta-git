<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepegawaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepegawaian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nip')->unique();
            $table->string('nama_lengkap')->nullable();
            $table->string('nidn')->nullable();
            $table->string('nira')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('nomor_ktp')->nullable();
            $table->string('nomor_kk')->nullable();
            $table->string('nomor_npwp')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_karpeg')->nullable();
            $table->string('nomor_rekening')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('unit_kerja_penempatan')->nullable();
            $table->string('unit_kerja_penugasan')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            $table->string('negara_institusi')->nullable();
            $table->string('kota_institusi')->nullable();
            $table->string('status_pegawai')->nullable();
            $table->string('jenis_pegawai')->nullable();
            $table->string('kategori_penugasan')->nullable();
            $table->string('golongan')->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('jabatan_fungsional_akademik')->nullable();
            $table->date('tmt_jabatan_fungsional_akademik')->nullable();
            $table->string('jabatan_fungsional_umum')->nullable();
            $table->date('tmt_jabatan_fungsional_umum')->nullable();
            $table->date('tanggal_mulai_kerja')->nullable();
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
        Schema::dropIfExists('kepegawaian');
    }
}
