@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>
    <table class="table table-bordered">
       <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
             <th>Role</th>
             <th>Status</th>
             <th>Created at</th>
             <th>Updated at</th>
          </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
              <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'no date'}}</td>
            <td>{{$user->updated_at ? $user->updated_at->diffForHumans() : 'no date'}}</td>
          </tr>

            @endforeach

        @endif


       </tbody>
     </table>

@endsection
