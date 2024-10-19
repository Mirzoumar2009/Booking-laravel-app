@extends('layouts.app')

@section('title')
    Change post
@endsection

@section('content')
    <form action="{{route('posts.update', $post)}}" method="post">
        @csrf
        @method('put')
        <label for="">Title</label> <br>
        <input class="form-control" type="text" value="{{$post->title}}" name="title" id=""><br>
        <label for="">Content</label><br>
        <textarea class="form-control" name="content" id="" cols="30" rows="10">{{$post->content}}</textarea><br>
        <input class="btn btn-outline-primary" type="submit" value="Save">
    </form>
@endsection
