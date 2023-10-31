<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $guarded=[];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id', 'id', "authors");
        //gli ultimi parametri si possono anche non mettere perchè laravel li riesce a capire grazie alle convenzioni
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id', "categories");
        //gli ultimi parametri si possono anche non mettere perchè laravel li riesce a capire grazie alle convenzioni
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
