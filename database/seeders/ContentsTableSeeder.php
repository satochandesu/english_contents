<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ここを追加
class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // --- ここから追加 ---
         DB::table('contents_table')->insert([
            'title'  => '1番目の投稿',
            'author' => 'A',
            'level' => '初心者',
            'category' => 'スポーツ',
            'time' => '10',
            'style' => '会話',
            'language' => '日/英',
            'detail' => '1番目の投稿です。この投稿はテストです。このサイトは、リスニング教材マッチングサイトです。',
            'link' => 'https://eigo.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('contents_table')->insert([
            'title'  => '2番目の投稿',
            'author' => 'B',
            'level' => '中級者',
            'category' => 'ニュース',
            'time' => '20',
            'style' => '会話',
            'language' => '日/英',
            'detail' => '2番目の投稿です。この投稿はテストです。このサイトは、リスニング教材マッチングサイトです。',
            'link' => 'https://eigo.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('contents_table')->insert([
            'title'  => '3番目の投稿',
            'author' => 'C',
            'level' => '上級者',
            'category' => 'スポーツ',
            'time' => '30',
            'style' => '会話',
            'language' => '日/英',
            'detail' => '3番目の投稿です。この投稿はテストです。このサイトは、リスニング教材マッチングサイトです。',
            'link' => 'https://eigo.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

         DB::table('contents_table')->insert([
            'title'  => '4番目の投稿',
            'author' => 'D',
            'level' => '初心者',
            'category' => 'スポーツ',
            'time' => '40',
            'style' => '会話',
            'language' => '日/英',
            'detail' => '4番目の投稿です。この投稿はテストです。このサイトは、リスニング教材マッチングサイトです。',
            'link' => 'https://eigo.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        // --- ここまで追加 ---

    }
}
