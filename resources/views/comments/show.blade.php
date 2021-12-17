@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    
    @foreach ($comment as $comment)
        <p>Comment posted by: </p>
        <a href="{{ route('posts.show', [ 'id' => $comment->account->id ]) }}">{{$comment->account->forename}} {{$comment->account->surname}}</a>
        <p>{{$comment->content}}</p>
        <p>-----------</p>
    @endforeach


    <p>Posted by: </p>
    <a href="{{ route('posts.show', [ 'id' => $comment->post->account_id ]) }}">{{$comment->post->account->forename}} {{$comment->post->account->surname}}</a>
    <img src="{{asset('images/' . $comment->post->id)}}.jpg"
        class="w-8/12 mb-8 shadow-xl"
        alt="">
        Caption: {{$comment->post->caption}}
    <p>like</p>
@endsection