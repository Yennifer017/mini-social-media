<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Cookie;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function create(Request $request){
        $data = new Publication();
        $data->id_user = Cookie::get('user_session');
        $data->content = $request->content;
        $data->save();
        return view('dashboard');
    }

    public function edit(Request $request){
        $id_user = Cookie::get('user_session');
        $publication = Publication::where('id', $request->publication_id)
            ->where('id_user', $id_user)
            ->first();
        if($publication){
            $publication->status = 'edited';
            $publication->content = $request->content;
            $publication->save();
        }
        return redirect()->back();
    }

    public function delete(Request $request){
        $id_user = Cookie::get('user_session');
        $publication = Publication::where('id', $request->publication_id)
            ->where('id_user', $id_user)
            ->first();
        if($publication){
            $publication->status = 'deleted';
            $publication->save();
        }
        return redirect()->back();
    }

    public function viewPublications(){
        $publications = Publication::where('status', 'created')
                ->orWhere('status', 'edited')
                ->get();
        return view('view_publications', compact('publications'));
    }

    public function viewOwnedPublications(){
        $idUser = Cookie::get('user_session');
        $publications = Publication::where(function ($query) {
            $query->where('status', 'created')
                  ->orWhere('status', 'edited');
            })
            ->where('id_user', $idUser) // AND between conditions
            ->get();

        return view('view_owned_publications', compact('publications'));
    }
}
