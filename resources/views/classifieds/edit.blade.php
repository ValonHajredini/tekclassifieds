@extends('layoutes.main')
@section('title', 'Edit')
@section('content')

    {!! Form::open(array('url' => 'foo/bar')) !!}
    //
    {!! Form::close() !!}

@stop
