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
        Schema::create('exports', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->longText('details')->nullable();

        // SEO fields
        $table->string('metaTitle')->nullable();
        $table->text('metaDescription')->nullable();
        $table->text('metaKeywords')->nullable();
        $table->string('ogTitle')->nullable();
        $table->text('ogDescription')->nullable();
        $table->string('ogImage')->nullable();

        $table->enum('status',['Y','N'])->default('Y');

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};
