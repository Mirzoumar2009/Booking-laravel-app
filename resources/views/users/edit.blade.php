@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <form action="{{route('user.update', $user)}}" method="post">
        @csrf
        @method('put')
        <label for="">name</label> <br>
        <input class="form-control" type="text" value="{{$user->name}}" name="name" id=""><br>
        <label for="">email</label><br>
        <input class="form-control" type="email" value="{{$user->email}}" name="email" id=""><br>
        <label for="">password</label><br>
        <input class="form-control" type="password"  name="password" id=""><br>
        <label for="">role</label><br>
        <select class="form-control" name="role">
            <option value="admin" <?= ($user['role'] == 'admin') ? 'selected' : '' ?>>admin</option>
            <option value="guest" <?= ($user['role'] == 'guest') ? 'selected' : '' ?>>guest</option>
            <option value="manager" <?= ($user['role'] == 'manager') ? 'selected' : '' ?>>manager</option>

        </select><br>   
        <input class="btn btn-outline-primary" type="submit" value="Save">
    </form>
@endsection
