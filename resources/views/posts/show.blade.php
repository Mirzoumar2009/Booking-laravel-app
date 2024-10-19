@extends('layouts.app')

@section('title')
    Posts info
@endsection

@section('content')
    <label for="">Title</label><br>
    {{$post->title}}<br>
    <hr>
    <label for="">Content</label><br>
    {{$post->content}}
@endsection
