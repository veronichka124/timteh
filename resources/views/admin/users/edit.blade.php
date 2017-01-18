@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>

    {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null,[ 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null,[ 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', $roles , null,[ 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null,[ 'class'=>'form-control']) !!}
    </div>

    {{--Submit button--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::submit('Edit User', [ 'class'=>'btn btn-primary col-sm-1']) !!}--}}
    {{--</div>--}}


    {!! Form::open(['method'=>'EDIT', 'action'=> ['AdminUsersController@update', $user->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Edit User', [ 'class'=>'btn btn-primary col-sm-2']) !!}
        </div>

        {!! Form::close() !!}

    {!! Form::close() !!}

    {{--Delete user button--}}


    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete User', [ 'class'=>'btn btn-danger col-sm-2']) !!}
        </div>

        {!! Form::close() !!}

    {!! Form::close() !!}

    @include('includes.error-form')



@stop