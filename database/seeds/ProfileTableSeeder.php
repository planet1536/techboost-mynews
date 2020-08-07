<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'name' => 'テストユーザ_1',
                'gender' => 'm',
                'hobby' => '趣味_1',
                'introduction' => '自己紹介_1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'テストユーザ_2',
                'gender' => 'm',
                'hobby' => '趣味_2',
                'introduction' => '自己紹介_2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'テストユーザ_3',
                'gender' => 'f',
                'hobby' => '趣味_3',
                'introduction' => '自己紹介_3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'テストユーザ_4',
                'gender' => 'm',
                'hobby' => '趣味_4',
                'introduction' => '自己紹介_4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'テストユーザ_5',
                'gender' => 'o',
                'hobby' => '趣味_5',
                'introduction' => '自己紹介_5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
