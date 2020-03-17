@extends('layouts.admin')




@section('content')



    <h1>Create Posts</h1>

    @include('includes.form_error')

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
    {{csrf_field()}}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['placeholder'=>'Title','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose category'],null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Choose file:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Content:') !!}
        {!! Form::textarea('body',null,['placeholder'=>'Type...','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <div class="form-group">
            {!! Form::submit('Post',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}



@stop