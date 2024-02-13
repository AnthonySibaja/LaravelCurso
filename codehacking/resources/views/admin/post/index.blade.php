@extends('layouts.admin')

@section('content')
    <h1>Post</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User</th>
                <th scope="col">Category id</th>
                <th scope="col">Photo id</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
            </tr>
        </thead>
        <tbody>
            @if ($posts)
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td><a href="{{ route('admin.post.edit', $post->id) }}">{{ $post->user->name  }}</a></td>
                       
                        <td>{{ $post->category ? $post->category->name : 'Uncategorized' }}</td>
                        <td><img height="100px" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at ? $post->created_at->diffForHumans() : 'N/A' }}</td>
                        <td>{{ $post->updated_at ? $post->updated_at->diffForHumans() : 'N/A' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
