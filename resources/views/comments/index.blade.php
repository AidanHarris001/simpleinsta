@extends('layouts.test')

@section('title')
    Home
@endsection

@section('content')
    <p>All comments</p>
    <ul>
        @foreach ($comment as $comment)
            <p>{{$comment->account->forename}}</p>
            <p>{{$comment->content}}</p>
        @endforeach
    </ul>
@endsection