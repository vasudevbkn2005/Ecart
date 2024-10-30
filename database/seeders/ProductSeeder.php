<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone 13 Mobile',
                "price" => "80000",
                "description" => "Best SmartPhone with 8Gb Ram 256Gb Storage",
                "category" => "Mobile",
                "gallery" => "https://www.phonemera.com/image/cache/catalog/APPLE/apple-iphone-13-Starlight/apple_iphone_13_starlight_4-200x200.jpg",
            ],
            [
                'name' => 'Microsoft Laptop',
                "price" => "500000",
                "description" => "Good For Coding Etc",
                "category" => "Laptop",
                "gallery" => "https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RW16e0d?ver=358e&q=90&m=6&h=200&w=200&b=%23FFFFFFFF&o=f&aim=true",
            ],
            [
                'name' => 'Tv BPL',
                "price" => "50000",
                "description" => "Best Tv with HD High Quility",
                "category" => "Tv",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2m4qWlf4FtL5109L7vn-v1EupO1DSIvEaFg&s",
            ]
        ]);
    }
}
