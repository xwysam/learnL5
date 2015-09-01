@extends('app')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>

    <hr />

    {!! Form::model($article, ['method' => 'PATCH','action'=>['ArticleController@update', $article->id]]) !!}
        @include('articles.form',['submitBtnText'=>'Edit Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop