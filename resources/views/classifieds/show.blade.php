@extends('layoutes.main')
@section('title', 'Show')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{!! $classified->title !!}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
               <div class="col-md-4">
                   <img src="/images/{!! $classified->main_image !!}" alt="">
                    <h3>Item Datails</h3>

                   <ul class="list-group">
                       <li class="list-group-item"><b>{!! $classified->price !!} €</b> </li>
                       <li class="list-group-item">Condition: {!! $classified->condition !!}</li>
                       <li class="list-group-item">Phone: {!! $classified->category->name !!}</li>


                   </ul>
                   <h3>Seller Datails</h3>

                   <ul class="list-group">
                       <li class="list-group-item">Location: {!! $classified->location !!}</li>
                       <li class="list-group-item">Phone: {!! $classified->phone !!}</li>
                       <li class="list-group-item">Email: {!! $classified->email !!}</li>

                   </ul>
               </div>
                <div class="col-md-8">
                    <h3>Item Description</h3>
                    <p>{!! $classified->description !!}</p>
                </div>
            </div>

        </div>
    </div>

@stop
