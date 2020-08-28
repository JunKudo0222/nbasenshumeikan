<?php

use Illuminate\Database\Seeder;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
            ['name' => 'デューク大学'],
            ['name' => 'UCLA'],            
            ['name' => 'ノースカロライナ大学'],            
            ['name' => 'アリゾナ州立大学'],            
            ['name' => 'ケンタッキー大学'],            
            ['name' => 'コネチカット大学'],            
            ['name' => 'アーカンソー大学'],            
            ['name' => 'アラバマ大学'],            
            ['name' => 'アリゾナ大学'],            
            ['name' => 'オーバーン大学'],            
            ['name' => 'ベイラー大学'],            
            ['name' => 'ボイス州立大学'],            
            ['name' => 'ボストン大学'],            
            ['name' => 'バックネル大学'],            
            ['name' => 'バトラー大学'],            
            ['name' => 'カリフォルニア大学'],            
            ['name' => 'カリフォルニアサンタバーバラ大学'],            
            ['name' => 'キャンプベル大学'],            
            ['name' => 'チャールストン大学'],            
            ['name' => '高卒'],            
            ['name' => '上記以外'],            
             
        ]);
    }
}
