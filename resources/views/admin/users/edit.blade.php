@extends('layouts.admin')




@section('content')


    <h1>Editing {{$user->name}}</h1>

    @include('includes.form_error')
    <div class="col-sm-3">
        <img src="{{$user->photo? $user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['placeholder'=>'Name','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['placeholder'=>'Email','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',[1=>'Active', 0=>'Inactive'],null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Choose file:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <div class="form-group">
                {!! Form::submit('Confirm Edit',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
        </div>
        {!! Form::close() !!}



        {{-- Deleting--}}


        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
            {{csrf_field()}}
            <div class="form-group">
                <div class="form-group">
                    {!! Form::submit('Delete user',['class'=>'btn btn-danger col-sm-6']) !!}
                </div>
            </div>
            {!! Form::close() !!}
    </div>




@stop