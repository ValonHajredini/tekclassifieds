@extends('layoutes.main')
@section('title', 'Create')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
        <form action="/auth/register" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{!! old('name') !!}">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" class="form-control" id="email" value="{!! old('email') !!}">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">confirm-password</label>
                <input type="password" name="password_confirmation" class="form-control" >
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
        </form>
    </div>
</div>
@stop