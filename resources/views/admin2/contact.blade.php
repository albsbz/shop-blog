@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')

      {!!Form::model($contacts, ['route'=>'contacts.update'])!!}

        <div class="form-group {!! !empty($errors->first('header'))?'has-error':'' !!}">
        </div>

        <div class="form-group">
            {!!Form::label('shopname', 'shopname')!!}
            {!!Form::text('shopname', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('mapsrc', 'mapsrc')!!}
            {!!Form::text('mapsrc', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('address', 'address')!!}
            {!!Form::text('address', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('phone', 'phone')!!}
            {!!Form::text('phone', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('email', 'email')!!}
            {!!Form::text('email', null, ['class'=>'form-control'])!!}
        </div>
     {{--    <div class="form-group">
            {!!Form::label('shorttext', 'shorttext')!!}
            {!!Form::text('shorttext', null, ['class'=>'form-control'])!!}
        </div> --}}
        <div class="form-group">
            {!!Form::label('shorttext', 'shorttext')!!}
            {!!Form::textarea('shorttext', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('description', 'description')!!}
            {!!Form::textarea('description', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('keywords', 'keywords')!!}
            {!!Form::textarea('keywords', null, ['class'=>'form-control'])!!}
        </div>
      


        <div class="form-group">
            {!!Form::label('text', 'text')!!}
            {!!Form::textarea('text', null, ['class'=>'form-control'])!!}
        </div>
      

        <div class="form-group">
            {!!Form::submit('Save', ['class'=>'btn btn-primary'])!!}
        </div>


    {!!Form::close()!!}
@stop

@push('js')
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>

    

    <script>
        CKEDITOR.replace('text', options);
          CKEDITOR.instances['text'].on('blur', function() {CKEDITOR.instances.text.updateElement();});
        CKEDITOR.replace('shorttext', options);
          CKEDITOR.instances['shorttext'].on('blur', function() {CKEDITOR.instances.shorttext.updateElement();});
        // CKEDITOR.replace('shorttext', options);
    </script>



    
@endpush

