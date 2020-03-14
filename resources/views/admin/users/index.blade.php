@extends('layouts.admin')




@section('content')


    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
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
            <td>{{$user->name}}</td>
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