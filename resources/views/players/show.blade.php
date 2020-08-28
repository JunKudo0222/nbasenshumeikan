@extends('layouts.app')

<p><font size="6"><b>{{$player->name}}</b></font></p> <br>
所属チーム: <form name="team" action="{{route('players.index')}}" method="get"><input type="hidden" name="team_id" value="{{$player->team->id}}"><a href="javascript:team.submit()">{{$player->team->name}}</a></form> 
<br>
出身大学:{{$player->college->name}}
<br>
特徴:{{$player->character}}
<br>
身長:{{$player->height}}cm
<br>
体重:{{$player->weight}}kg
<br>
ドラフト:<a href="{{ route('players.draft',$player->draft_year->year) }}">{{$player->draft_year->year}}年</a>
<br>
指名順位:{{$player->draft_rank->rank}}位
<br>
@if(isset($player->birthday))
年齢:{{$age->age}}歳
<br>
生年月日:{{$player->birthday->format('Y年m月d日')}}
@endif
<br>
<br>
@foreach ($comments as $comment)
        
・{{ $comment->body }} ---by {{ $comment->user->name }} 執筆日時：{{ $comment->created_at }}
            
<br>      
@endforeach
<br>

詳細を追記する
<form action="{{ route('comments.store') }}" method="POST">
            {{csrf_field()}}
    <input type="hidden" name="player_id" value="{{ $player->id }}">        
    <div class="form-group col-md-4">
        <label>詳細</label>
        <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
</form>


<a href="{{route('players.index')}}">戻る</a>