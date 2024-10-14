@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
@endsection
