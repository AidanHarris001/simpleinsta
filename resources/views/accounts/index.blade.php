@extends('layouts.test')

@section('title')
    Accounts
@endsection

@section('content')
    <p>All user accounts on the site:</p>
    <ul>
        @foreach ($account as $account)
            <li> {{$account->forename}} </li>
        @endforeach
    </ul>
@endsection