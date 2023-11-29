<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(){
        
        $lastArticle = Article::latest('created_at')->first();

        $articlesByCategory = Article::with('category')
        ->get()
        ->groupBy('category.name')
        ->map(function($articles) {
            return $articles->take(3);//prendo gli ultimi 3 articoli per ogni categoria 
        });
        return view('welcome',[
            "lastArticle" => $lastArticle,
            "articlesByCategory" => $articlesByCategory,
            "categories"=>Category::all()
        ]);
    }

    public function create(){
        return view('articles/create',[
            "authors"=>Author::all(),
            "categories"=>Category::all()
        ]);
    }

    public function store(Request $request){
        //validate i dati
        $validatedData = $request->validate([
            "title" => "required",
            "slug" => "required",
            "content" => "required",
            "category_id"=> "required|numeric",
            "author_id"=> "required|numeric" ,
            "img" => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            
            $validatedData['img'] = 'upload/' . $imageName;
            
            
        }
    
        Article::create($validatedData);

        // $article = new Article();

        // $article->title = $request->input('title');
        // $article->slug = $request->input('slug');
        // $article->content = $request->input('content');
        // $article->category_id = $request->input('caregory_id');
        // $article->author_id = $request->input('author_id');
        // if ($request->hasFile('img')) {
        //     $image = $request->file('img');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('upload'), $imageName);
        // }
        // $article->img = 'upload/' . $imageName;
        // $article->save();

        return redirect('/');
    }
    
    public function edit($id){

        $article = Article::find($id);

        return view('articles/edit',[
            "article" => $article,
            "authors" => Author::all()
        ] );
    }
    public function detail($slug, $id){

        $article = Article::where('id',$id)->first();
        $comments = Comment::where('article_id',$id)->first();
        $last3Articles = Article::where('category_id',$article->category_id)
        ->orderBy('created_at', 'DESC')
        ->take(3)
        ->get();
        

        return view('articles/detail',[
            "article" => $article,   
            "comments" => $comments,
            "lastArticles"=>$last3Articles,
        ] );
    }

    public function update(Request $request, $id){
        $article = Article::find($id);
        $validatedData = $request->validate([
            "title" => "required",
            "slug" => "required",
            "content" => "required",
            "author_id"=> "required|numeric" 
        ]);
        $article->fill($validatedData);
        $article->save();
        return redirect('/');
    }

    public function delete($id){
        Article::destroy($id);
        return redirect('/');
    }
}
