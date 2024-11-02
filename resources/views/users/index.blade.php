@extends('layouts.app')

@section('content')


    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>edit</th>
            <th>delete</th>
            <th>show</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('users.edit', $user)}}">change</a></td>
                <td>
                    <form action="{{route('users.destroy', $user)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-outline-danger" type="submit" value="delete">
                    </form>
                </td>
                <td>
                    <form action="{{route('users.show', $user)}}" method="post">
                        @csrf
                        @method('get')
                        <input class="btn btn-outline-success" type="submit" value="show">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-outline-primary" href="{{route('users.create')}}">add</a>
@endsection
