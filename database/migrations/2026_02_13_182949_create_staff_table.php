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
        Schema::create('staff', function (Blueprint $table) {
    $table->id();

    $table->string('first_name');
    $table->string('last_name');
    $table->string('position'); 
    $table->string('department')->nullable(); 

    $table->string('photo')->nullable();
    $table->text('bio')->nullable();

    $table->string('qualifications')->nullable();
    $table->unsignedInteger('years_of_experience')->nullable();

    $table->boolean('is_leadership')->default(false);
    $table->boolean('is_active')->default(true);

    $table->integer('display_order')->default(0);

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
