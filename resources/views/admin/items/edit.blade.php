@extends('layouts.admin')

@section('content')

    <h1>Edit Items</h1>

<div class="col-sm-3">

    <img src="/images/{{$item->photo ? $item->photo->file : 'no photo'}}" alt="" class="img-responsive img-rounded">
</div>
    <div class="col-sm-9">

    {!! Form::model($item, ['method'=>'PATCH', 'action'=> ['AdminItemsController@update', $item->id], 'files'=>true ]) !!}

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
        {!! Form::select('category_id', array(''=>'options'), null,[ 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::file('photo_id', null, [ 'class'=>'form-control']) !!}
    </div>



        {!! Form::open(['method'=>'EDIT', 'action'=> ['AdminItemsController@update', $item->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Edit Item', [ 'class'=>'btn btn-primary col-sm-2']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::close() !!}

    {{--Delete button--}}


    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminItemsController@destroy', $item->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Item', [ 'class'=>'btn btn-danger col-sm-2']) !!}
    </div>

    {!! Form::close() !!}

    </div>

    @include('includes.error-form')



@stop







