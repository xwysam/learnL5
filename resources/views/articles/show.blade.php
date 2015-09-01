@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>
    <div class="body">
        {{$article->body}}
    </div>
    <p>{{$article->published_at}}</p>
    @unless($article->tag->isEmpty())
        <h5>Tags: </h5>
        <ul>
            @foreach($article->tag as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
    @endunless
@stop
