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
        Schema::disableForeignKeyConstraints();

        Schema::create('advertise_photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->boolean('mainPhoto')->default(false);
            $table->unsignedBigInteger('advertise_id');
            $table->foreign('advertise_id')->references('id')->on('advertises');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertise_photos');
    }
};
