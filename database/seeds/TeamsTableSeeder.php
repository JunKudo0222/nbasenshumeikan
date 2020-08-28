<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['name' => 'ロサンゼルス・レイカーズ','detail' => '最強','abb' =>'LAL'],
            ['name' => 'ロサンゼルス・クリッパーズ','detail' => '最強','abb' =>'LAC'],
            ['name' => 'デンバー・ナゲッツ','detail' => '最強','abb' =>'DEN'],
            ['name' => 'ヒューストン・ロケッツ','detail' => '最強','abb' =>'HOU'],
            ['name' => 'オクラホマシティ・サンダー','detail' => '最強','abb' =>'OKC'],
            ['name' => 'ユタ・ジャズ','detail' => '最強','abb' =>'UTA'],
            ['name' => 'ダラス・マーベリックス','detail' => '最強','abb' =>'DAL'],
            ['name' => 'メンフィス・グリズリーズ','detail' => '最強','abb' =>'MEM'],
            ['name' => 'ポートランド・トレイルブレイザーズ','detail' => '最強','abb' =>'POR'],
            ['name' => 'フェニックス・サンズ','detail' => '最強','abb' =>'PHX'],
            ['name' => 'サンアントニオ・スパーズ','detail' => '最強','abb' =>'SAS'],
            ['name' => 'ニューオーリンズ・ペリカンズ','detail' => '最強','abb' =>'NOP'],
            ['name' => 'サクラメント・キングス','detail' => '最強','abb' =>'SAC'],
            ['name' => 'ミネソタ・ティンバーウルブス','detail' => '最強','abb' =>'MIN'],
            ['name' => 'ゴールデンステイト・ウォーリアーズ','detail' => '最強','abb' =>'GSW'],
            ['name' => 'ミルウォーキー・バックス','detail' => '最強','abb' =>'MIL'],
            ['name' => 'トロント・ラプターズ','detail' => '最強','abb' =>'TOR'],
            ['name' => 'ボストン・セルティックス','detail' => '最強','abb' =>'BOS'],
            ['name' => 'マイアミ・ヒート','detail' => '最強','abb' =>'MIA'],
            ['name' => 'インディアナ・ペイサーズ','detail' => '最強','abb' =>'IND'],
            ['name' => 'フィラデルフィア・セブンティシクサーズ','detail' => '最強','abb' =>'PHI'],
            ['name' => 'ブルックリン・ネッツ','detail' => '最強','abb' =>'BKN'],
            ['name' => 'オーランド・マジック','detail' => '最強','abb' =>'ORL'],
            ['name' => 'ワシントン・ウィザーズ','detail' => '最強','abb' =>'WAS'],
            ['name' => 'シャーロット・ホーネッツ','detail' => '最強','abb' =>'CHA'],
            ['name' => 'シカゴ・ブルズ','detail' => '最強','abb' =>'CHI'],
            ['name' => 'ニューヨーク・ニックス','detail' => '最強','abb' =>'NYK'],
            ['name' => 'デトロイト・ピストンズ','detail' => '最強','abb' =>'DET'],
            ['name' => 'アトランタ・ホークス','detail' => '最強','abb' =>'ATL'],
            ['name' => 'クリーブランド・キャバリアーズ','detail' => '最強','abb' =>'CLE'],
            ['name' => '引退','detail' => '最強','abb' =>'OB'],
            
        ]);
    }
}
