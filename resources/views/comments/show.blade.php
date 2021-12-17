@extends('layouts.test')

@section('title', 'Post Details')

@section('content')

    <li>
        name: {{$comment->account->forename}}
        content: {{$comment->content}}
    </li>

@endsection