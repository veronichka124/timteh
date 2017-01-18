@extends('layouts.admin')

@section('content')

<h1>Categories</h1>


    <div class="col-sm-6">


    </div>


    <div class="col-sm-6">

        @if($categories)

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at ? $category->created_at ->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>



    @stop