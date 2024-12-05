<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Publication;
use Cookie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request){
        $data = new Comment();
        $data->id_user = Cookie::get('user_session');
        $data->id_publication = $request->id_publication;
        $data->content = $request->content;
        $data->save();
        return redirect()->back();
    }

    public function delete(Request $request){

    }

    public function edit(){

    }

    public function view($idPublication){
        $comments = Comment::where(function ($query) {
            $query->where('status', 'created')
                  ->orWhere('status', 'edited');
        })
        ->where('id_publication', $idPublication) // AND entre condiciones
        ->get();
        $user = Cookie::get('user_session');
        $publication = Publication::where('id', '=', $idPublication)->first();
        return view('view_comments',
            compact('comments', 'user', 'publication')
        );
    }
}
