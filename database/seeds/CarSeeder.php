<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_cars')->insert([
            'name_car' => 'Honda Brio',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '200000',
            'img_car' => 'brio.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Daihatsu Ayla',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '300000',
            'img_car' => 'ayla.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Alphard',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '500000',
            'img_car' => 'alphard.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Elf',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '400000',
            'img_car' => 'elf.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Ertiga',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '100000',
            'img_car' => 'ertiga.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Fortuner',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '150000',
            'img_car' => 'fortuner.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Hiace',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '120000',
            'img_car' => 'hiace.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Honda HRV',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '110000',
            'img_car' => 'hrv.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Suzuki Ignis',
            'type_car' => 'Manual',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '210000',
            'img_car' => 'ignis.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Honda Jazz',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '310000',
            'img_car' => 'jazz.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Daihatsu Xenia',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '320000',
            'img_car' => 'xenia.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('tb_cars')->insert([
            'name_car' => 'Sirion',
            'type_car' => 'Matic',
            'description_car' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, omnis rem? Aliquid soluta cupiditate impedit odit nulla ut perferendis ducimus repudiandae voluptatibus dolore, iusto quia veritatis autem officiis veniam vero.',
            'price_car' => '315000',
            'img_car' => 'sirion.jpg',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
    }
}
