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
                <th>View Post</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td><a href="{{ route('home.post', ['id' => $comment->post->id]) }}">View Post</a></td>
                    <td>
                        @if($comment->is_active == 1)
                            {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}
                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}
                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                        
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentsController@destroy', $comments->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h1 class="text-center">No Comment</h1>
@endif

    
@stop
