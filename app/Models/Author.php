<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $guarded = [];
    use HasFactory;

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
