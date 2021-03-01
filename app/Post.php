<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','author'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
