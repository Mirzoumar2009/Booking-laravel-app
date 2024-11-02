@extends('layouts.app')

@section('title')
    add users
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <label for="">name</label> <br>
        <input type="text" class="form-control" name="username"  id=""><br>
        <label for="">email</label><br>
        <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id=""><br>
        <label for="">password</label><br>
        <input type="password" class="form-control" name="password"  id=""><br>

        <input type="submit" class="btn btn-primary" value="Save"><br>
    </form>
@endsection
