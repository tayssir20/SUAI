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
          Schema::create('Form_Data', function (Blueprint $table) {
            $table->id();
            $table->string('typeClient');
            $table->string('email');
            $table->string('nom');
            $table->string('prenom');
            $table->text('adresse');
            $table->json('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('Form_Data');
    }
};
