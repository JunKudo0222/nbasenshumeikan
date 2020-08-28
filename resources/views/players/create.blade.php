@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('players.store') }}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label>選手名</label>
                    <input type="text" class="form-control" placeholder="例)　レブロン・ジェームズ" name="name">
                </div>
                <div class="">
                    <label for="exampleFormControlSelect1">ステータス</label><br>
                    
                        
                        <input type="radio" class="active" id="genneki" name="team" value="{{$intai ->id}}" checked>
                        <label class="" for="{{ $intai ->id }}">
                            現役
                        </label><br>
                        <input type="radio" class="" id="intai" name="team" value="{{$intai ->id}}">
                        <label class="" for="{{ $intai ->id }}">
                            引退
                        </label><br>
                        
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">チーム</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="team">
                        @foreach($teams as $team)
                            <option value="{{ $team -> id }}">{{ $team -> name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">出身大学</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="college">
                        @foreach($colleges as $college)
                            <option value="{{ $college -> id }}"> {{ $college -> name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row" style="display:inline-flex">
                <div class="col-md-4 form-group">  
                        <label>身長</label>
                        <input type="number" class="form-control" placeholder="例)198" name="height">
                        <label>cm</label>
                </div>
                <div class="col-md-4 form-group">
                    <label>体重</label>
                    <input type="number" class="form-control" placeholder="例)96" name="weight">kg
                </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ドラフト年</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="draft_year">
                        @foreach($draft_years as $draft_year)
                            <option value="{{ $draft_year -> id }}"> {{ $draft_year -> year }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">指名順位</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="draft_rank">
                        @foreach($draft_ranks as $draft_rank)
                            <option value="{{ $draft_rank -> id }}"> {{ $draft_rank -> rank }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>生年月日</label>
                    <input type="date" class="form-control" placeholder="例)　1984/12/30" name="birthday">
                </div>
                <div class="form-group">
                    <label>特徴</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="character"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成する</button>
            </form>
        </div>
    </div>
</div>
@endsection