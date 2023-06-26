<?php

namespace App\Http\Controllers;

use App\Models\ReplyComment;
use Illuminate\Http\Request;

class ReplyCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'news_id' => ['required', 'numeric'],
            'comment_id' => ['required', 'numeric'],
            'message' => ['required', 'string'],
        ]);

        $reply = ReplyComment::create([
            'news_id' => $request->news_id,
            'comment_id' => $request->comment_id,
            'user_id' => auth()->user()->id,
            'message' => $request->message,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function show(ReplyComment $replyComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ReplyComment $replyComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReplyComment $replyComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReplyComment $replyComment)
    {
        //
    }
}
