@extends('layouts.test')

@section('title', 'Account Details')

@section('content')

    <ul>
        <li>Forename: {{$account->forename}}</li>
        <li>Surname: {{$account->surname}}</li>
        <li>Date of Birth: {{$account->date_of_birth}}</li>
        <li>Bio: {{$account->bio}}</li>
    </ul>
@endsection