@extends('layouts.test')

@section('title')
    Home
@endsection

@section('content')
    <p>All posts</p>
    <ul>
        @foreach ($post as $post)
            <a href="{{ route('accounts.show', [ 'id' => $post->account_id ]) }}">{{$post->account->forename}} </a>
            <img src="{{asset('images/' . $post->id)}}.jpg"
                class="w-8/12 mb-8 shadow-xl"
                alt="">
            {{$post->caption}}
            <p>like</p>
            <a href="{{ route('posts.show', [ 'id' => $post->id ]) }}">comments</a>
        @endforeach
    </ul>
@endsection