@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>
    <div class="body">
        {{$article->body}}
    </div>
    <p>{{$article->published_at}}</p>

@stop