@extends('app')

@section('content')

<h1>About Me {{$first}} {{$last}}</h1>

@if(count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
@endif

<p>
    I am a new grad who holds UBC’s Master of Software System degree with GPA as A-.
    I have experience on three Web applications (both back-end and front -end), one IOS application,
    a Cloud Java distribution application, and one desktop Java application’s design and development.
    I am keen on developing back-end applications, and have hands-on skills on Laravel and Slim PHP framework,
    RESTFul API development.
</p>
@stop

