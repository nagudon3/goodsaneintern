<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function post()
    {
        return $this->hasMany(Comment::class);
    }
}
