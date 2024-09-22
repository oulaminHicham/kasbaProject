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
        Schema::create('reservatons', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email');
            $table->string('price');
            $table->string('details')->nullable();
            $table->foreignId('suite_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_arive');
            $table->date('date_depart');
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservatons');
    }
};
