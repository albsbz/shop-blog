@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')
   @if(empty($category->name))
      {!!Form::model($category, ['route'=>'categories.store'])!!}
    @else 
     {!!Form::model($category, ['route'=>['categories.update', $category->id], 'method'=>'PUT'])!!}
     @endif 
        <div class="form-group {!! !empty($errors->first('name'))?'has-error':'' !!}">
            {!!Form::label('name', 'Category name')!!}
            {!!Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

         <div class="form-group">
            {!!Form::label('description', 'description')!!}
            {!!Form::textarea('description', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('slug', 'slug')!!}
            {!!Form::text('slug', null, ['class'=>'form-control'])!!}
        </div>
        
     {{--    <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="thumbnail" class="form-control" type="text" name="filepath">
         </div> --}}
         
         <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="thumbnail" class="form-control" type="text" name="imgPath" value="{{$category->imgPath}}">
         </div>
         <div id="holder" style="margin-top:15px;max-height:100px;">
             <img src="{{$category->imgPath}}" class="imgCategory">
         </div> {{-- img->div
         </div> --}}

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
    CKEDITOR.replace('description', options);
    </script>



     <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
      $('#lfm').filemanager('image');
    </script>
@endpush

<style>
  .imgCategory{width: 100px;}
</style>