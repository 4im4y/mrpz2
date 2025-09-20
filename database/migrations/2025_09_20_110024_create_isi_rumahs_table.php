<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('isi_rumahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('nokp')->unique();
            $table->string('jantina');
            $table->date('tarikh_lahir');
            $table->string('pekerjaan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isi_rumahs');
    }
};
