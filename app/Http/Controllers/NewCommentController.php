<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class NewCommentController extends Controller
{
    public function index() {

      $comment = Comment::all();

      return view('/new-comment', ['comment' => $comment]);
    }

    public function newComment(Request $request) {

      date_default_timezone_set("Asia/Taipei");

      $comment = new Comment;
      $comment->user_id = 1;
      $comment->room_id = 0000;
      $comment->public = false;
      $comment->type = $request->input('commentType');
      $comment->content = $request->input('commentContent');
      $comment->remember_token = $request->input('_token');
      $comment->created_at = date('Y-m-d H:i:s');
      $comment->updated_at = date('Y-m-d H:i:s');

      if ($comment->save()) {
        return redirect('/new-comment');
      }

    }

    public function delete($id) {

      $deleteComment = Comment::where('id', $id)->delete();

      if ($deleteComment) {
        return redirect('/new-comment');
      }
    }
}
