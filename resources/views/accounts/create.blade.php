@extends('layouts.app')

@section('title', 'Create Account')

@section('content')
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <p>Forename: <input type="text" name="forename" 
            value="{{ old('forename') }}"></p>
        <p>Surname: <input type="text" name="surname"
            value="{{ old('surname') }}"></p>
        <p>Date of Birth: <input type="date" name="date_of_birth"
            value="{{ old('forename') }}"></p>
        <p>Bio: <input type="text" name="bio"
            value="{{ old('forename') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('accounts.index') }}">Cancel</a>
    </form>
@endsection