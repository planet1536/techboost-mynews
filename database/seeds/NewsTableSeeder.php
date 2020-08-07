<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'テスト記事_1',
                'body' => 'テスト本文_1',
                'image_path' => basename('D:\takayuki\work\プログラミングスクール\TechBoost\mynews\news_1.jpg'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'title' => 'テスト記事_2',
                'body' => 'テスト本文_2',
                'image_path' => basename('D:\takayuki\work\プログラミングスクール\TechBoost\mynews\news_2.jpg'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'title' => 'テスト記事_3',
                'body' => 'テスト本文_3',
                'image_path' => basename('D:\takayuki\work\プログラミングスクール\TechBoost\mynews\news_3.jpg'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'title' => 'テスト記事_4',
                'body' => 'テスト本文_4',
                'image_path' => basename('D:\takayuki\work\プログラミングスクール\TechBoost\mynews\news_4.jpg'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'title' => 'テスト記事_5',
                'body' => 'テスト本文_5',
                'image_path' => basename('D:\takayuki\work\プログラミングスクール\TechBoost\mynews\news_5.jpg'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
