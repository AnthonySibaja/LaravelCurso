@extends('layouts.admin')

@section('content')
    <h1>Edit Users</h1>

    <div class="row">


        <div class="col-sm-3">
            <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt=""
                class="img-responsive img-rounded">

        </div>
        <div class="col-sm-9">



            {!! Form::model($user, [
                'method' => 'PATCH',
                'action' => ['App\Http\Controllers\AdminUsersController@update', $user->id],
                'files' => true,
            ]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role: ') !!}
                {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Status: ') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo: ') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password: ') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-4']) !!}
            </div>
            {!! Form::close() !!}



            {!! Form::model($user, [
                'method' => 'DELETE',
                'action' => ['App\Http\Controllers\AdminUsersController@destroy', $user->id, ],
                'files' => true,
               
            ]) !!}

            <div class="form-group">
                {!! Form::submit( 'Delete',['class'=>'btn btn-danger col-sm-4']) !!}
                  </div>
         
            {!! Form::close() !!}

        </div>
    </div>
    <div>
        @include('includes.form_error')

    </div>
@endsection
