<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function scopeGetCommentsFromAdmin($query) 
    {
        return $query->where('ID', '1');
    }
}
