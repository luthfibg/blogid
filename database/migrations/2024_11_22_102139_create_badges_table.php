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
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'badges_user_id'
            );
            $table->integer('number_of_posts')->default(0);
            $table->integer('copper_posts')->default(0);
            $table->integer('silver_posts')->default(0);
            $table->integer('gold_posts')->default(0);
            $table->integer('copper_star_posts')->default(0);
            $table->integer('silver_star_posts')->default(0);
            $table->integer('gold_star_posts')->default(0);
            $table->integer('platinum_star_posts')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('badges');
    }
};
