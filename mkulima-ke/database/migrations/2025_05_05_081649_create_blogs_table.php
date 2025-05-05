<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Market Trends This Week',
                'content' => 'Discover the latest prices for maize, wheat, and soybeans across regional markets.',
                'image' => 'images/market-trends.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Farming Techniques',
                'content' => 'Learn about vertical farming methods that increase yield by 300%.',
                'image' => 'images/farming-techniques.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Weather Advisory',
                'content' => 'Important rainfall predictions for the next 15 days.',
                'image' => 'images/weather-advisory.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
