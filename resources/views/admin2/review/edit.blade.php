@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')
    {!!Form::model($review, ['route'=>['reviews.update', $review->id], 'method'=>'PUT'])!!}

        <div class="form-group {!! !empty($errors->first('header'))?'has-error':'' !!}">
            {!!Form::label('header', 'article header')!!}
            {!!Form::text('header', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!!Form::label('text', 'text')!!}
            {!!Form::textarea('text', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('rating', 'rating')!!}
            {!!Form::select('rating', $ratings, null, ['class'=>'form-control'])!!}
        </div>
        




        <div class="form-group">
            {!!Form::submit('Save', ['class'=>'btn btn-primary'])!!}
        </div>


    {!!Form::close()!!}
@stop

@push('js')



  
@endpush

