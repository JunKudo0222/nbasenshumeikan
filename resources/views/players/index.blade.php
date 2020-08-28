@extends('layouts.app')

<a href="{{route('players.create')}}">新規投稿</a><br>
		<div class="col-md-3  justify-content-center">
		チームで絞り込む
		<form action="{{ route('players.index') }}" method="get">
            {{csrf_field()}}

			<select class="form-control" id="exampleFormControlSelect1" name="team_id">
							@foreach($teams as $team)
								@if($team->id == $request->team_id)
									<option value="{{ $team -> id }}" selected>{{ $team -> name }}</option>
								@else
									<option value="{{ $team -> id }}">{{ $team -> name }}</option>
								@endif
							@endforeach
			</select>
			<button type="submit" class="btn btn-primary">絞り込み</button>
        </form>
			<a href="{{route('players.index')}}"><button  class="btn btn-primary">解除</button></a>
		</div>
	<div class="row">
		@foreach($players as $player)
			<div class="card col-md-3" style="width: 18rem;">
				<div class="card-body text-center px-0" >
					{{$player->id}}
					選手名: <a href="{{ route('players.show',$player->id) }}">{{$player->name}}</a>
						<br>
					{{$player->team->name}}
						<br>
					身長:{{$player->height}}cm
						<br>
					体重:{{$player->weight}}kg
						<br>
					特徴:{{$player->character}}
						<br>
						@if(isset($player->birthday))
					年齢:{{$player->birthday->age}}
						<br>
					生年月日:{{$player->birthday->format('Y年m月d日')}}
						<br>
					@endif
					ドラフト:<a href="{{ route('players.draft',$player->draft_year->year) }}">{{$player->draft_year->year}}年</a> {{$player->draft_rank->rank}}位
				</div>
			</div>
		@endforeach
	</div>
	{{ $players->links() }}
@foreach($teams as $team)
	<a href="{{route('players.team',$team->id)}}">{{$team->abb}}</a>/
@endforeach