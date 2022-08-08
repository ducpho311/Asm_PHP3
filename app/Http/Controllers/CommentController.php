<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('admin.comment.listComment', [
            'comments' => Comment::paginate(10),
        ]);
    }
    public function create(CommentRequest $request)
    {
        $comment = new Comment();

        $comment->fill($request->all());
        $comment->id_user = $request->rating;
        $comment->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        if ($id) {

            if (Comment::destroy($id)) {

                return redirect()->route('admin.comment.list-comment');
            }
        }
    }
}
