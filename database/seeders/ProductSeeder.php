<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8Gb RAM and many more features',
            'category'=>'mobile',
            'gallery'=>'https://cdn1.smartprix.com/rx-iuvs4uvlM-w1200-h1200/uvs4uvlM.jpg'
            ],
            [
            'name'=>'Panasonic tv',
            'price'=>'400',
            'description'=>'A smarttv with many more features',
            'category'=>'tv',
            'gallery'=>'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_94855656/fee_786_587_png'
            ],
            [
            'name'=>'sony tv',
            'price'=>'500',
            'description'=>'A smarttv with  many more features',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/81OKf-bj55L._AC_SX450_.jpg'
            ],
            [
            'name'=>'LG fridge',
            'price'=>'350',
            'description'=>'A fridge with many more features',
            'category'=>'fridge',
            'gallery'=>'https://www.lg.com/in/images/refrigerators/md07524769/gallery/GL-S292RPZX-Refrigerators-Front-View-D01.jpg'
            ]
        ]);
    }
}
