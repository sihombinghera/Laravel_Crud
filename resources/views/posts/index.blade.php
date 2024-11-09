@extends('layout')

@section('content')
    <h1><strong>Posts</strong> </h1>
    <a  class= "btn btn-primary" href="{{ route('posts.create') }}">Create New Post</a>
    <div class="row">
        <div class="col-12">
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </form>
        </div>
    </div>
    <br>
    <br>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Aksi</th>
          </tr>

        </thead>
        @php
            $no=1;
        @endphp
        @foreach ($posts as $post)
        
        <tr>
            <td>{{ $no++ }}</td>
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
    <div class="d-flex justify-content-center">
        {{ $posts->links('pagination::bootstrap-5') }}
          </div>

@endsection
