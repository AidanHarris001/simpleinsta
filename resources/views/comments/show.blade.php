@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    
    @foreach ($comment as $comment)
        <a href="{{ route('posts.show', [ 'id' => $comment->account->id ]) }}">{{$comment->account->forename}}</a>
        <p>{{$comment->content}}</p>
    @endforeach

    <a href="{{ route('accounts.show', [ 'id' => $comment->post->account_id ]) }}">{{$comment->post->account->forename}} </a>
    <img src="{{asset('images/' . $comment->post->id)}}.jpg"
        class="w-8/12 mb-8 shadow-xl"
        alt="">
        {{$comment->post->caption}}
    <p>like</p>
@endsection