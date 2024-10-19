@extends('layouts.app')

@section('title')
    Add post
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
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label for="">Title</label> <br>
        <input type="text" class="form-control" name="title" id=""><br>
        <label for="">Content</label><br>
        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" class="btn btn-primary" value="Save"><br>
    </form>
@endsection
