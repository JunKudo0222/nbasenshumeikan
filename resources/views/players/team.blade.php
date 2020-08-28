@extends('layouts.app')

<p><font size="6"><b>{{$team->name}}</b></font></p>
<br>
{{$team->detail}}
<br>
選手一覧
<br>
@foreach($players as $player)

・<a href="{{route('players.show',$player->id)}}">{{$player->name}}</a>
<br>
@endforeach

<hr>
@foreach($teams as $team)
<a href="{{route('players.team',$team->id)}}">{{$team->abb}}</a>/
@endforeach

