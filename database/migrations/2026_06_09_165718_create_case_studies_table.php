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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('short_description')->nullable();
            $table->longText('overview')->nullable();

            $table->string('client_name')->nullable();
            $table->string('industry', 100)->nullable();

            $table->string('location')->nullable();

            $table->string('project_type', 100)->nullable(); // SPC Flooring / Quartz Surface

            $table->string('project_area', 100)->nullable();

            $table->longText('challenge')->nullable();
            $table->longText('solution')->nullable();
            $table->longText('result')->nullable();

            $table->text('products_used')->nullable();

            $table->date('completion_date')->nullable();

            $table->string('featured_image')->nullable();

            $table->json('gallery')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

            $table->enum('status', ['draft', 'published'])->default('draft');

            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};