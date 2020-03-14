@extends('layouts.admin')




@section('content')


    <h1>Create user</h1>

    @include('includes.form_error')

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
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
        {!! Form::select('role_id',[''=>'Choose role']+$roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[1=>'Active', 0=>'Inactive'],0,['placeholder'=>'Status','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file','Choose file:') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['placeholder'=>'Password','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}


@stop