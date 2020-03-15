@extends('layouts.admin')




@section('content')


    <h1>Users</h1>

    @if(session()->has('deleted_user'))
        <div class="alert alert-success">
            <p>{{session('deleted_user')}}</p>
        </div>
    @endif

    @if(session()->has('created_user'))
        <div class="alert alert-success">
            <p>{{session('created_user')}}</p>
        </div>
    @endif

    @if(session()->has('edited_user'))
        <div class="alert alert-success">
            <p>{{session('edited_user')}}</p>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>PHOTO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CREATED</th>
            <th>UPDATED</th>
            <th>ROLE</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo? $user->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td>{{$user->role['name']}}</td>
            <td>{{$user->is_active==1?'Active':'Inactive'}}</td>
          </tr>
          @endforeach
        @endif
        </tbody>
      </table>



@stop