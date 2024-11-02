@extends('layouts.app')

@section('content')


    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>description</th>

            <th>created_at</th>
            <th>updated_at</th>
            <th>edit</th>
            <th>delete</th>
            <th>show</th>
        </tr>
        @foreach($rests as $rest)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$rest->name}}</td>
                <td>{{$rest->description}}</td>

                <td>{{$rest->created_at}}</td>
                <td>{{$rest->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('rests.edit', $rest)}}">change</a></td>
                <td>
                    <form action="{{route('rests.destroy', $user)}}" method="post">
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
