@extends('layouts.admin')
@section('content')

    <h1>User</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
            </tr>
        </thead>
        <tbody>
       
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img src="{{$user->photo ? $user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded"></td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                     
                        <td>{{$user->email}}</td>
                        <td>{{$user->role ? $user->role->name : 'No Role'}}</td>
                        <td>{{$user->is_active == 1 ? 'Active': 'No active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                        <td>{{$user->photo_id}}</td>
                    </tr>
                @endforeach
        
        </tbody>
    </table>

@stop
