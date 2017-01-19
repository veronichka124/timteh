@extends('layouts.admin')

@section('content')

    <h1>Create Categories</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null,[ 'class'=>'form-control']) !!}
    </div>

    {{--Submit button--}}

    <div class="form-group">
        {!! Form::submit('Create Category', [ 'class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.error-form')



@stop







