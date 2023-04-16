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
        Schema::create('readers_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id')
                ->constrained('readers');
            $table->foreignId('news_id')
                ->constrained('news');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readers_news');
    }
};
