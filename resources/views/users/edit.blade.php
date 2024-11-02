@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <form action="{{route('users.update', $user)}}" method="post">
        @csrf
        @method('put')
        <label for="">name</label> <br>
        <input class="form-control" type="text" value="{{$user->username}}" name="name" id=""><br>
        <label for="">email</label><br>
        <input class="form-control" type="email" value="{{$user->email}}" name="email" id=""><br>
        <label for="">password</label><br>
        <input class="form-control" type="password" value="{{$user->password}}" name="password" id=""><br>
        <input class="btn btn-outline-primary" type="submit" value="Save">
    </form>
@endsection
