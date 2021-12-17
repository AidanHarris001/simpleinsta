@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    
    @foreach ($comment as $comment)
        <p>{{$comment->account->forename}}</p>
        <p>{{$comment->content}}</p>
    @endforeach
@endsection