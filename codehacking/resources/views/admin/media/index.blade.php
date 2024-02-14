@extends('layouts.admin')

@section('content')

<h1>Media</h1>
@if(isset($photos) && count($photos) > 0)

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
        
            @foreach ($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                   
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    
                    <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'N/A' }}</td>
                    
                    <td>{{ $photo->updated_at ? $photo->updated_at->diffForHumans() : 'N/A' }}</td>
                    <td>

                        {!! Form::open([
                            'method' => 'DELETE',
                            'action' => ['App\Http\Controllers\AdminMediasController@destroy', $photo->id],
                            'files' => true,
                        ]) !!}
                    
                    
                        <div class="form-group">
                            {!! Form::submit('Delete Category', ['class' => 'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@endsection