<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewCommentController extends Controller
{
    public function index() {

      $data = DB::table('comment')->get();

      return view('new-comment', ['data' => $data]);
    }

    public function newComment(Request $request) {

      $commentType = $request->input('commentType');
      $commentContent = $request->input('commentContent');
      $token = $request->input('_token');

      DB::table('comment')->insert(
        ['user_id' => '1',
         'type' => $commentType,
         'content' => $commentContent,
         'remember_token' => $token,
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s')
       ]);

      return redirect('new-comment');
    }

    public function delete($id) {

      DB::table('comment')->where('id', $id)->delete();

      return redirect('new-comment');
    }
}
