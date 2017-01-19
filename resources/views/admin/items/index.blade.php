@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_item'))

        <p class="bg-danger">{{session('deleted_item')}}</p>
    @endif

    <h1>Items</h1>

        @if($items)

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price $</th>
                    <th>Created at</th>
                    <th>Updated at</th>


                </tr>
                </thead>
                <tbody>

                @foreach($items as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img width="200px" src="/images/{{$item->photo ? $item->photo->file : 'no photo'}}"></td>
                        <td><a href="{{route('admin.items.edit', $item->id)}}"> {{$item->title}}</a></td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->category ? $item->category->name : 'No category'}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->created_at ? $item->created_at->diffForHumans() : 'no date'}}</td>
                        <td>{{$item->updated_at ? $item->updated_at->diffForHumans() : 'no date'}}</td>


                    </tr>
                @endforeach
            </table>
        @endif




@stop