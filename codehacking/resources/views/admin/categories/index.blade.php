@extends('layouts.admin')

@section('content')
    <h1> Categories</h1>
    <div class="col-sm-6">
        {!! Form::open([
            'method' => 'POST',
            'action' => ['App\Http\Controllers\AdminCategoriesController@store'],
            'files' => true,
        ]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="col-sm6">

        @if ($categories)
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $categories)
                        <tr>
                            <td>{{ $categories->id }}</td>

                            <td><a href="{{route('admin.categories.edit',$categories->id)}}">{{ $categories->name }}</a></td>

                            <td>{{ $categories->created_at ? $categories->created_at->diffForHumans() : 'N/A' }}</td>

                            <td>{{ $categories->updated_at ? $categories->updated_at->diffForHumans() : 'N/A' }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
@endsection
