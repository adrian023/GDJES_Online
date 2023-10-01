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
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motherID');
            $table->foreign('motherID')->references('id')->on('mothers');
            $table->unsignedBigInteger('fatherID');
            $table->foreign('fatherID')->references('id')->on('fathers');
            $table->unsignedBigInteger('guardianID');
            $table->foreign('guardianID')->references('id')->on('guardians');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
