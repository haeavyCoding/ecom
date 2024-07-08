<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=> 'OPPo MOb',
                'price'=>'15000',
                'category'=>'phone',
                'gallery'=>'https://opsg-img-cdn-gl.heytapimg.com/epb/202402/20/VYh23XynbefcMeYT.png',
                'description'=>'smart phone 4gb ram and 64gb rom',
            ],
            [
                'name'=> 'LG TV',
                'price'=>'25000',
                'category'=>'electronics',
                'gallery'=>'https://www.lg.com/content/dam/channel/wcms/in/images/tvs/55uq8040psb_atr_eail_in_c/55UQ8040PSB-450.jpg',
                'description'=>'LG TV for home aliances',
            ],
            [
                'name'=> 'Samsung Friz',
                'price'=>'20000',
                'category'=>'Electroncs',
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/rr23d2h359u-hl/gallery/in-next-crown-door-and-handle-of-horizontal-design-492036-rr23d2h359u-hl-539528407?$2052_1641_PNG$',
                'description'=>'Samsung Friz double door for home',
            ],
            [
                'name'=> 'HP Laptop',
                'price'=>'70000',
                'category'=>'Computer',
                'gallery'=>'https://m.media-amazon.com/images/I/61Qe0euJJZL.jpg',
                'description'=>'HP Laptop 16gb ram and 2TB Storage',
            ]
        ]);
    }
}
