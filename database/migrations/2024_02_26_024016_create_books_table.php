<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('authorid');
            $table->string('title', 55);
            $table->string('ISBN', 25);
            $table->smallInteger('pub_year');
            $table->tinyInteger('available')->default(0);
            $table->timestamps();
        });

        // Insert 10 records into the books table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('books')->insert([
                'title' => 'Book ' . $i,
                'authorid' => rand(1, 10), // Assuming you have authors table with IDs from 1 to 10
                'ISBN' => 'ISBN' . $i,
                'pub_year' => rand(2000, 2022),
                'available' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
