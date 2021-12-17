@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    <a href="{{ route('accounts.show', [ 'id' => $post->account_id ]) }}">{{$post->account->forename}} </a>
    <form method="POST"
        action="{{ route('posts.destroy', [ 'id' => $post->id ]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <img src="{{asset('images/' . $post->id)}}.jpg"
        class="w-8/12 mb-8 shadow-xl"
        alt="">            
    <p>caption: {{$post->caption}}</p> 
        <p>like</p>
        <a href="{{ route('comments.index', [ 'id' => $post->id ]) }}">comments</a>
@endsection