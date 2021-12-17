@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    <a href="{{ route('accounts.show', [ 'id' => $post->account_id ]) }}">account {{$post->account_id}} </a>
    <form method="POST"
        action="{{ route('posts.destroy', [ 'id' => $post->id ]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <img src="{{asset('images/' . $post->id)}}.jpg"
        class="w-8/12 mb-8 shadow-xl"
        alt="">            
    {{$post->caption}}
        <p>like</p>
        <p>comments</p>
@endsection