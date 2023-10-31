<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('authors/list',[
            'authors'=>Author::all()
        ]);
    }
    public function create(){
        return view('authors/create');
    }
    public function store(Request $request){
        //validate i dati
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
        ]);

        Author::create($validatedData);

        // $author = new Author();

        // $author->name = $request->name;
        // $author->surname = $request->surname;
        

        // $author->save();

        return redirect('/authors/list');


    } 

    public function edit($id){
        return view('authors/edit',[
            "author" => Author::find($id)
        ]);
    }

    public function update(Request $request, $id){
        // $article = Author::find($id);
        // $validatedData = $request->validate([
        //     "name" => "required",
        //     "surname" => "required",
        // ]);
        // $article->fill($validatedData);
        // $article->save();
        // return redirect('/authors/list');
    }

    public function indexByAuthor($id){
        
        return view("authors/articles", [
            "articles" => Article::where("author_id", $id)->get(),
            "author" => Author::find($id)
        ]);

    }
}
