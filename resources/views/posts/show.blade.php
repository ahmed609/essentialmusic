@extends('layouts.app')

@section('content')
    <button class="btn btn-primary post_nav"><a href="/posts" class="post_nav_link">Go Back</a></button>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('DELETE', ['class'=> 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection

