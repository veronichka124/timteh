@extends('layouts.admin')

@section('content')
    <h1>Items</h1>


    <div class="col-sm-6">

        @if($items)

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>

                </tr>
                </thead>
                <tbody>

                @foreach($items as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>

                    </tr>
                @endforeach
            </table>
        @endif
    </div>



@stop