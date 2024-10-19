@extends('layouts.app')
@section('title')
    Posts list
@endsection
@section('content')


    <table class="table">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Show</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('posts.edit', $post)}}">Change</a></td>
                <td>
                    <form action="{{route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="{{route('posts.show', $post)}}" method="post">
                        @csrf
                        @method('get')
                        <input class="btn btn-outline-success" type="submit" value="Show">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-outline-primary" href="{{route('posts.create')}}">Add</a>
@endsection
