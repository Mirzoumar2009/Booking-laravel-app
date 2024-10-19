@extends('layouts.app')

@section('title')

@endsection

@section('content')

    <label for="">name:</label>
    {{$user->name}}<br>
    <hr>
    <label for="">email:</label>
    {{$user->email}}<br>
    <hr>
    <label for="">password:</label>
    {{$user->password}}<br>
    <hr>
    <label for="">role:</label>
    {{$user->email}}<br>
    <hr>
    <a class="btn btn-outline-primary" href="{{route('user.index')}}">back</a>
@endsection
