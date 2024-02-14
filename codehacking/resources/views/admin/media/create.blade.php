@extends('layouts.admin')
@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js">

@endsection
@section('content')

<h1>Upload Media</h1>
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
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endsection