<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public function userApp()
    {
        return $this->belongsTo(UserApp::class, 'id_user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_publication');
    }
    
}
