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
        Schema::create('testimonials', function (Blueprint $table) {
    $table->id();

    $table->string('client_name');
    $table->string('company_name')->nullable();
    $table->string('designation')->nullable();

    $table->text('testimonial');

    $table->string('client_image')->nullable();

    $table->unsignedTinyInteger('rating')->default(5);

    $table->string('location')->nullable();

    $table->string('project_name')->nullable();
    $table->string('product_type')->nullable();

    $table->enum('status', ['active', 'inactive'])->default('active');

    $table->integer('display_order')->default(0);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
