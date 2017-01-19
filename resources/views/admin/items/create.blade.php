@extends('layouts.admin')

    @section('content')

        <h1>Create Items</h1>

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminItemsController@store', 'files'=>true ]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null,[ 'class'=>'form-control']) !!}
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
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null,[ 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null, [ 'class'=>'form-control']) !!}
        </div>

            {{--Submit button--}}

        <div class="form-group">
            {!! Form::submit('Create Item', [ 'class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


        @include('includes.error-form')



@stop







