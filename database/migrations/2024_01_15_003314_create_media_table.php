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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('Nome do conteúdo');
            $table->unsignedBigInteger('type_id')->comment('Tipo filme/serie/anime');
            $table->decimal('rate', 2, 2)->default(0.0)->comment('Nota do filme');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
