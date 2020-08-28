<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\College;
use App\Draft_year;
use App\Draft_rank;
use App\Comment;
use Carbon\Carbon;
use Auth;


class PlayerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $players =  Player::all();
        $teams = Team::all();
        $draft_year = Draft_year::all();
        $draft_rank = Draft_rank::all();
        // dd($players);
        $query = Player::query();
        $search2 = $request->input('team_id');
        
        if (isset($request->team_id) ) {
            $query->where('team_id', $search2)->get();
        }
        
         $players = $query->paginate(8);

        
                 foreach($players as $player){
                     if(isset($player->birthday)){

                         
                         
                         $age =Carbon::createFromDate($player->birthday->toDateTimeString());
                        }
                        
                }; 
                
            
        
        
        if(isset($age)){

            return view('players.index', compact('players','teams','age','request','draft_year','draft_rank'));
        }
        else{
            return view('players.index', compact('players','teams','request','draft_year','draft_rank'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $colleges = College::all();
        $draft_years = Draft_year::all();
        $draft_ranks = Draft_rank::all();
        $id=31;
        $intai = Team::find($id);
        
        
        return view('players.create',compact('teams','colleges','draft_years','draft_ranks','intai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player; //インスタンスを作成

        $player -> name    = $request -> name; //ユーザー入力のtitleを代入
        $player -> character     = $request -> character; //ユーザー入力のbodyを代入
        $player -> user_id  = Auth::id(); //ログイン中のユーザーidを代入
        $player -> team_id = $request -> team;
        $player -> college_id = $request -> college;
        $player -> height = $request -> height;
        $player -> weight = $request -> weight;
        $player -> draft_year_id = $request -> draft_year;
        $player -> draft_rank_id = $request -> draft_rank;
        $player -> birthday = $request -> birthday;
        

        $player -> save(); //保存してあげましょう
        
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $player =  Player::find($id);
        if(isset($player->birthday)){

            $age = Carbon::createFromDate($player->birthday->toDateTimeString());
        }
        else{
            $age = null;
        }
        
        
        
        
        $player->load('team','college','draft_year','draft_rank');
        


        $comments = Comment::where('player_id',$player->id)->latest()->get();
        
        

        return view('players.show', compact('player','age','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function draft($year)
    {
        
        $draft_years = Draft_year::all();
        $draft_year = Draft_year::where('year',$year)->first();
        
        $draft_year->load('players');
        
        $players = Player::sortable('draft_rank_id')->paginate();
        $players = $players->where('draft_year_id',$draft_year->id);
        
        
        

        
        
        
        
        
        
        return view('players.draft', compact('draft_year','players','draft_years'));

    }

    public function team($id)
    {
        
        $teams = Team::all();
        $team = Team::find($id);
        
        $team->load('players');
        
        $players = $team->players;
        
        
        
        
        
        
        
        return view('players.team', compact('team','teams','players','id'));

    }

    public function java()
    {
        return view('players.java');
    }
    
}
