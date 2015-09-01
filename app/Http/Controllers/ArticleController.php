<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
class ArticleController extends Controller
{
    public function index(){

        $articles = Article::Published()->get();

        return view('articles.index',compact(['articles']));
    }

    public function show($id){
        $article = Article::findorFail($id);

//        dd($article->published_at->diffForHumans());

        return view('articles.show',compact(['article']));
    }

    public function create(){

        return view('articles.create');
    }

    //when using Illuminate/Http\Request

//    public function store(Request $request){
//
//        $this->validate($request,['title'=>'required','body'=>'required','published_at'=>'required']);
//        $input = array('title'=>$request->input('title'),
//            'body'=>$request->input('body'),
//            'published_at'=>$request->input('published_at'));
//        Article::create($input);
//        return redirect('articles');
//    }
    //when using Request directly
    public function store(Requests\CreateArticle $request){

        Article::create(Request::all());
        return redirect('articles');

    }

    public function edit($id)
    {
        $article = Article::findorFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id, Requests\CreateArticle $request){

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
