<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
}
