@extends('layouts.admin')

@section('content')

<h1>Media</h1>
@if($photos)

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">File</th>
        
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($photos as $photos)
                <tr>
                    <td>{{ $photos->id }}</td>
                   
                    <td><img height="50" src="{{$photos->file}}" alt=""></td>
                    
                    <td>{{ $photos->created_at ? $photos->created_at->diffForHumans() : 'N/A' }}</td>
                    
                    <td>{{ $photos->updated_at ? $photos->updated_at->diffForHumans() : 'N/A' }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@endsection