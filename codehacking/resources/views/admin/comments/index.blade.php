@extends('layouts.admin')

@section('content')

@if ($comments->count() > 0)
<h1>Comments</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Author</th>
                        <th scope="col">Email</th>
                        <th scope="col">Body</th>
                        <th><a href="{{ route('home.post', ['id' => $comment->post->id]) }}">View Post</a></th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($comments as $comments)
                        <tr>
                            

                            <td>{{$comment->id}}</td>
                            <td>{{$comment->author}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->body}}</td>

                            <td>{{ $categories->created_at ? $categories->created_at->diffForHumans() : 'N/A' }}</td>

                            <td>{{ $categories->updated_at ? $categories->updated_at->diffForHumans() : 'N/A' }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            
                
            @else
                <h1 class="text-center">No Comment</h1>
            
        @endif

@stop