@extends('layouts.test')

@section('title', 'Post Details')

@section('content')
    <p>All posts</p>
     
    @foreach ($post as $post)
        <a href="{{ route('accounts.show', [ 'id' => $post->account_id ]) }}">{{$post->account->forename}} </a>
        <img src="{{asset('images/' . $post->id)}}.jpg"
            class="w-8/12 mb-8 shadow-xl"
            alt="">
        {{$post->caption}}
        <p>like</p>
        <a href="{{ route('comments.show', [ 'id' => $post->id ]) }}">comments</a>
    @endforeach

    <ul>
        <li>Forename: {{$post->account->forename}}</li>
        <li>Surname: {{$post->account->surname}}</li>
        <li>Date of Birth: {{$post->account->date_of_birth}}</li>
        <li>Bio: {{$post->account->bio}}</li>
    </ul>

    <form method="POST"
        action="{{ route('accounts.destroy', [ 'id' => $post->account->id ]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection