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
        Schema::create('regis_binaan_u_k_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Age');
            $table->string('Gender');
            $table->string('Email')->unique();
            $table->string('NoContactTenant');
            $table->string('nameTenant');
            $table->string('sectorTenant');
            $table->string('addreasTenant');
            $table->longText('aboutTenant');
            $table->text('Logo');
            $table->string('LNIB')->nullable();
            $table->string('LHALAL')->nullable();
            $table->string('LPIRT')->nullable();
            $table->string('LHKI')->nullable();
            $table->string('LBPOM')->nullable();
            $table->string('LSNI')->nullable();
            $table->string('FB')->nullable();
            $table->string('IG')->nullable();
            $table->string('statusTenant')->default('Di Proses');
            $table->date('DateRegist');
            $table->string('yearTenant');
            $table->string('Slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regis_binaan_u_k_m_s');
    }
};
