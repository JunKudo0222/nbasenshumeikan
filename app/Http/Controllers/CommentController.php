<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comments = Comment::latest('created_at');
        $commentplayer = Player::find($request->player_id);
        
        
        

        
        // $comments->load('prefecture', 'area');
        return view('players.show',compact('comments','commentplayer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $player = Player::find($request->player_id);  //まず該当の投稿を探す
        

        $comment = new Comment;      //commentのインスタンスを作成
        
        $comment -> body    = $request -> body;
        $comment -> user_id = Auth::id();
        $comment -> player_id = $request -> player_id;

        $comment -> save();

        
        return redirect()->route('players.show',$player ->id);
        // return redirect()->route('comments.index')->with('message','評価とコメントを送信しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
