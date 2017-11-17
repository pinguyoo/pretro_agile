<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCommentController extends Controller
{
    public function index() {
      return view('new-comment');
    }

    public function newComment(Request $request) {
      $commentType = $request->input('commentType');
      $commentContent = $request->input('commentContent');
      echo $commentType . $commentContent;
    }
}
