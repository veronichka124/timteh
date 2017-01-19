@extends('layouts.admin')

@section('content')

<h1>Categories</h1>







        @if($categories)

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                @endforeach
            </table>
        @endif




    @stop