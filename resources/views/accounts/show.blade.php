@extends('layouts.test')

@section('title', 'Account Details')

@section('content')

    <ul>
        <li>Forename: {{$account->forename}}</li>
        <li>Surname: {{$account->surname}}</li>
        <li>Date of Birth: {{$account->date_of_birth}}</li>
        <li>Bio: {{$account->bio}}</li>
    </ul>

    <form method="POST"
        action="{{ route('accounts.destroy', [ 'id' => $account->id ]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('accounts.index') }}">Back</a></p>
@endsection