@extends('layouts.admin')

    @section('content')

        <h1>Create Items</h1>

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminItemsController@store', 'files'=>true ]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Title') !!}
            {!! Form::text('name', null,[ 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null,[ 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price') !!}
            {!! Form::text('price', null,[ 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'Photo') !!}
            {!! Form::file('file', null, [ 'class'=>'form-control']) !!}
        </div>

            {{--Submit button--}}

        <div class="form-group">
            {!! Form::submit('Create Item', [ 'class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


        @include('includes.error-form')



@stop







