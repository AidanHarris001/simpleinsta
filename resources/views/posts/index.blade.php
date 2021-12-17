@extends('layouts.test')

@section('title')
    Home
@endsection

@section('content')
    <p>All posts</p>
    @foreach ($post as $post)
        <a href="{{ route('posts.show', [ 'id' => $post->account_id ]) }}">{{$post->account->forename}} {{$post->account->surname}}</a>
        <img src="{{asset('images/' . $post->id)}}.jpg"
            class="w-8/12 mb-8 shadow-xl"
            alt="">
        Caption: {{$post->caption}}
        <p>like</p>
        <a href="{{ route('comments.show', [ 'id' => $post->id ]) }}">comments</a>
        <p>--------------</p>
    @endforeach
    
@endsection