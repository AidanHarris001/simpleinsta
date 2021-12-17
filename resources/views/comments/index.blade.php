@extends('layouts.test')

@section('title')
    Home
@endsection

@section('content')
    @foreach ($comment as $comment)
        <p>{{$comment->account->forename}}</p>
        <p>{{$comment->content}}</p>
    @endforeach
@endsection