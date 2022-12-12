<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function community(){
        return $this->belongsTo(Community::class);
       }

       public function comment(){
        return $this->hasMany(Comment::class);
    }
}
