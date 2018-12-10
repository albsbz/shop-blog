@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')
    @if(empty($user->name))
      {!!Form::model($user, ['route'=>'users.store'])!!}
    @else
     {!!Form::model($user, ['route'=>['users.update', $user->id], 'method'=>'PUT'])!!}
    @endif
        <div class="form-group {!! !empty($errors->first('name'))?'has-error':'' !!}">
            {!!Form::label('name', 'User name')!!}
            {!!Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('email', 'Email')!!}
            {!!Form::email('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('phone', 'Phone')!!}
            {!!Form::text('phone', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('role', 'Roles')!!}
            {!!Form::select('roles[]', $roles, $user->roles->pluck('id'), ['class'=>'form-control',  'multiple'=>true])!!}
        </div>

        <div class="form-group">
            {!!Form::label('password', 'Password')!!}
            {!!Form::password('password', ['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
            {!!Form::submit('Save', ['class'=>'btn btn-primary'])!!}
        </div>

    {!!Form::close()!!}
@stop

@push('js')
<script>
    $('select').select2();
</script>
@endpush

