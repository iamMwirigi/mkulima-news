<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Market Trends This Week',
                'content' => 'Discover the latest prices for maize, wheat, and soybeans across regional markets. 
                              This week, the market has seen significant changes due to weather conditions and global demand. 
                              Farmers are advised to monitor these trends closely to make informed decisions about their crops. 
                              [Add more detailed content here...]',
                'image' => 'images/market-trends.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'category' => 'Market',
            ],
            [
                'title' => 'New Farming Techniques',
                'content' => 'Learn about vertical farming methods that increase yield by 300%. 
                              Vertical farming is a revolutionary approach to agriculture that maximizes space and resources. 
                              [Add more detailed content here...]',
                'image' => 'images/farming-techniques.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'category' => 'Farming',
            ],
            [
                'title' => 'Weather Advisory',
                'content' => 'Important rainfall predictions for the next 15 days. 
                              Farmers should prepare for heavy rains in certain regions, which may affect crop yields. 
                              [Add more detailed content here...]',
                'image' => 'images/weather-advisory.jpg',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'category' => 'Weather',
            ],
        ]);
    }
}
