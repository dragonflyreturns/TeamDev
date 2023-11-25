<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '動物',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => 'スポーツ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '朝ごはん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '漫画',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '映画',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '学校か仕事の話',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '今日何をするか',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '夢',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '今日楽しみなこと',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '夜ご飯どうするか',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => 'プログラミング',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => 'ゲーム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('themes')->insert([
            'user_id' => '1',
            'theme' => '大喜利',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
