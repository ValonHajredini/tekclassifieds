@extends('layoutes.main')
@section('title', 'Edit')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Classifieds</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(array('action' => ['ClassifiedsController@update', $cllassified->id], 'method' => 'PUT', 'enctype'=> 'multipart/form-data')) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', $value = $cllassified->title, $attributes =['class' => 'form-control', 'name' => 'title'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                <select name="category_id" id="category_id" class="form-control">
                    <option value="1">Smart Phones</option>
                    <option value="2">Desktops</option>
                    <option value="3">Laptops</option>
                    <option value="4">tablets</option>
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', $value = $cllassified->description, $attributes =['class' => 'form-control', 'name' => 'description'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', $value = $cllassified->price, $attributes =['class' => 'form-control', 'name' => 'price'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('condition', 'Condition') !!}
                {!! Form::select('condition', array(
                    '0'         => 'Choose Condition',
                    'New'       => 'New',
                    'Like new'  => 'Like new',
                    'Used'      => 'Used',
                    'Bed'       => 'Bed',
                    'Broken'    => 'Broken'
                ),$cllassified->condition, $attributes =['class' => 'form-control', 'name' => 'condition'])
                !!}
            </div>
            <div class="form-group">
                {!! Form::label('main_image', 'Main image') !!}
                {!! Form::file('main_image', $value = null, $attributes =['class' => 'btn btn-default', 'name' => 'main_image'] ) !!}
            </div>
            <h3>Seller Contact info</h3>
            <div class="form-group">
                {!! Form::label('location', 'Location') !!}
                {!! Form::text('location', $value = $cllassified->location, $attributes =['class' => 'form-control', 'name' => 'location'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', $value = $cllassified->email, $attributes =['class' => 'form-control', 'name' => 'email'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('phone', 'Phone') !!}
                {!! Form::text('phone', $value = $cllassified->phone, $attributes =['class' => 'form-control', 'name' => 'phone'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('owner_id', 'Owner_id') !!}
                {!! Form::text('owner_id', $value = $cllassified->owner_id, $attributes =['class' => 'form-control', 'name' => 'owner_id'] ) !!}
            </div>
            {!! Form::submit('Submit', $attributes = ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
