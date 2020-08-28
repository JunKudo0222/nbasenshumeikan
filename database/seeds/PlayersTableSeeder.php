<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            ['name' => 'レブロン・ジェームズ','character' => '-','birthday' => '1984-12-30','height' => '206','weight' => '113','team_id' => '1','college_id' => '1','draft_year_id' => '1','draft_rank_id' => '1'],
            ['name' => 'アンソニー・デイビス','character' => '-','birthday' => '1993-03-11','height' => '208','weight' => '100','team_id' => '1','college_id' => '1','draft_year_id' => '10','draft_rank_id' => '1'],
            ['name' => 'ドワイト・ハワード','character' => '-','birthday' => '1985-12-08','height' => '208','weight' => '120','team_id' => '1','college_id' => '1','draft_year_id' => '2','draft_rank_id' => '1'],
            ['name' => 'ジャベール・マギー','character' => '-','birthday' => '1988-01-19','height' => '213','weight' => '114','team_id' => '1','college_id' => '1','draft_year_id' => '6','draft_rank_id' => '18'],
            ['name' => 'カイル・クズマ','character' => '-','birthday' => '1995-07-24','height' => '206','weight' => '102','team_id' => '1','college_id' => '1','draft_year_id' => '15','draft_rank_id' => '27'],
            ['name' => 'アレックス・カルーソ','character' => '-','birthday' => '1994-02-28','height' => '196','weight' => '84','team_id' => '1','college_id' => '1','draft_year_id' => '14','draft_rank_id' => '60'],
            ['name' => 'レイジョン・ロンド','character' => '-','birthday' => '1986-02-22','height' => '185','weight' => '79','team_id' => '1','college_id' => '1','draft_year_id' => '4','draft_rank_id' => '21'],
            ['name' => 'ダニー・グリーン','character' => '-','birthday' => '1987-06-22','height' => '198','weight' => '98','team_id' => '1','college_id' => '1','draft_year_id' => '7','draft_rank_id' => '46'],
            ['name' => 'コンテビアス・カルドウェル・ポープ','character' => '-','birthday' => '1993-02-18','height' => '198','weight' => '93','team_id' => '1','college_id' => '1','draft_year_id' => '11','draft_rank_id' => '8'],
            ['name' => 'マーキーフ・モリス','character' => '-','birthday' => '1989-09-02','height' => '208','weight' => '113','team_id' => '1','college_id' => '1','draft_year_id' => '9','draft_rank_id' => '13'],
            
        ]);
    }
}
