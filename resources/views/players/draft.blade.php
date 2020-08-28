@extends('layouts.app')

<p><font size="6"><b>{{$draft_year->year}}年のNBAドラフト</b></font></p>
<br>

@foreach($players as $player)

{{$player->draft_rank_id}}位: <a href="{{route('players.show',$player->id)}}">{{$player->name}}</a>
<br>
@endforeach



@foreach($draft_years as $draft_year)
<a href="{{route('players.draft',$draft_year->year)}}">{{$draft_year->year}}</a>/
@endforeach

<br>
