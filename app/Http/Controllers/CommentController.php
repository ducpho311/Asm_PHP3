<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::select('*')->orderBy('id', 'desc')->with('user')->with('product')->paginate(10);
        
        return view('admin.comment.list', ['comment_list' => $comment]);
    }
    public function delete(Comment $id)
    {
        if ($id->delete()) {
            return redirect()->back();
        }
    }
    public function create(CommentRequest $request, $id) {
        $data = new Comment();
        $data->content = $request->content;
        $data->user_id = Auth::user()->id;
        $data->product_id = $id;
        // dd($data);
        $data->save();
        return redirect()->back();
    }

}



