@extends('layouts.admin')

@section('content')
    <h1>Post</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User id</th>
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
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>{{ $post->photo_id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at ? $post->created_at->diffForHumans() : 'N/A' }}</td>
                        <td>{{ $post->updated_at ? $post->updated_at->diffForHumans() : 'N/A' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
