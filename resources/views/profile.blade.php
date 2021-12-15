@extends('layouts.test')

@section('title')
    User Profile {{$account}}
@endsection

@section('content')
    @if($account)
        <h1>{{$account ?? ''}}</h1>
    @else
        <h1>No profile selected</h1>
    @endif    
@endsection