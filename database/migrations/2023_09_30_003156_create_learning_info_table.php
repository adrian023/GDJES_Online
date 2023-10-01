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
        Schema::create('learning_info', function (Blueprint $table) {
            $table->id();
            $table->boolean('maySarilingTabletAngBata');
            $table->boolean('mayComputerSaBahay');
            $table->boolean('walangSarilingGadgetAngBata');
            $table->boolean('mayTvSaBahay');
            $table->boolean('mayInternetSaBahay');
            $table->boolean('mobileDataLangAngGamit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_info');
    }
};
