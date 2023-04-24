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
        Schema::create('googleCalendar', function (Blueprint $table) {
            $table->id();
            $table->string('id');
            $table->string('kind');
            $table->string('etag')->nullable();
            $table->string('summary')->nullable();
            $table->string('description')->nullable();
            $table->string('location');
            $table->string('timeZone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('googleCalendar');
    }
};
