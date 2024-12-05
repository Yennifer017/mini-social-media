<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function publication()
    {
        return $this->belongsTo(Publication::class, 'id_publication');
    }

    public function userApp()
    {
        return $this->belongsTo(UserApp::class, 'id_user');
    }
}
