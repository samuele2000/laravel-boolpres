<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_id','title', 'description', 'image'];

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
