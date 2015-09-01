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
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    public function index(){

        $articles = Article::Published()->get();

        return view('articles.index',compact(['articles']));
    }

    public function show(Article $article){

        return view('articles.show',compact(['article']));
    }

    public function create(Article $article){

        $tags = \App\Tag::lists('name','id');
        return view('articles.create',compact('tags','article'));
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
    /**
     * @param Requests\CreateArticle $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CreateArticle $request){

        $article = \Auth::user()->articles()->create($request->all());
        $article->tag()->attach($request->input('tag_list'));

        \Session::flash('flash_message','Your article has been created!');
        return redirect('articles');
    }


    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $tags = \App\Tag::lists('name');
        return view('articles.edit',compact('article','tags'));
    }

    public function update(Article $article, Requests\CreateArticle $request){

        $article->update($request->all());
        return redirect('articles');
    }
}
