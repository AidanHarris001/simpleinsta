@extends('layouts.test')

@section('title')
    Home
@endsection

@section('content')
    <p>All posts</p>
    <ul>
        @foreach ($post as $post)
            <img src="{{asset('images/' . $post->id)}}.jpg"
                class="w-8/12 mb-8 shadow-xl"
                alt="">
            <li>
                {{$post->caption}}
            </li>
        @endforeach
    </ul>
@endsection