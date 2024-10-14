@extends('layout')

@section('content')
    <h1><strong>Posts</strong> </h1>
    <a  class= "btn btn-primary" href="{{ route('posts.create') }}">Create New Post</a>
    <br>
    <br>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Aksi</th>
          </tr>

        </thead>
        @foreach ($posts as $post)
        <tr>
            <td>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
           <td> <a  class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Edit</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>

    @endforeach
    </table>

@endsection
