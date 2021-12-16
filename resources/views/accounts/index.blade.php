@extends('layouts.test')

@section('title')
    Accounts
@endsection

@section('content')
    <p>All user accounts on the site:</p>
    <ul>
        @foreach ($account as $account)
            <li><a href="{{ route('accounts.show', [ 'id' => $account->id ]) }}">{{$account->forename}}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('accounts.create')}}">Create Account</a>
@endsection