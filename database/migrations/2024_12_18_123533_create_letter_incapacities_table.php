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
        Schema::create('letter_incapacities', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('tgl_lahir', 255)->nullable(false);
            $table->string('tempat_lahir', 255)->nullable(false);
            $table->string('gender', 255)->nullable(false);
            $table->string('nationality', 255)->nullable(false)->default("WNI");
            $table->string('education', 255)->nullable(false);
            $table->string('job', 255)->nullable(false);
            $table->string('marriage', 255)->nullable(false);
            $table->string('nik', 255)->nullable(false);
            $table->string('religion', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('name_child', 255)->nullable(false);
            $table->string('tgl_lahir_child', 255)->nullable(false);
            $table->string('tempat_lahir_child', 255)->nullable(false);
            $table->string('gender_child', 255)->nullable(false);
            $table->string('education_child', 255)->nullable(false);
            $table->string('address_child', 255)->nullable(false);
            $table->string('no_wa', 255)->nullable(false);
            $table->year('year')->nullable(false)->default(now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_incapacities');
    }
};
