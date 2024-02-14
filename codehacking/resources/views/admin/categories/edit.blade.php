@extends('layouts.admin')

@section('content')
    <h1> Edit Category</h1>
    <div class="col-sm-6">
        {!! Form::model(
            $categories,
            [
                'method' => 'PATCH',
                'action' => ['App\Http\Controllers\AdminCategoriesController@update', $categories->id],
                'files' => true,
                'id' => $categories->id,
            ]
        ) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\AdminCategoriesController@destroy', $categories->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Category', ['class' => 'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection