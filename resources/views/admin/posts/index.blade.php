@extends('layouts.admin')




@section('content')


    <h1>Posts</h1>
    @if($posts)
        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>OWNER</th>
                <th>CATEGORY</th>
                <th>PHOTO</th>
                <th>TITLE</th>
                <th>BODY</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
              </tr>
            </thead>
            @foreach($posts as $post)
            <tbody>
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user['name']}}</td>
                <td>{{$post->category?$post->category->name:'Uncategorized'}}</td>
                <td><img height="50" src="{{$post->photo? $post->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
    @endif
@stop