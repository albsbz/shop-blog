@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')
    @if(empty($article->header))
      {!!Form::model($article, ['route'=>'articles.store'])!!}
    @else
     {!!Form::model($article, ['route'=>['articles.update', $article->id], 'method'=>'PUT'])!!}
    @endif
        <div class="form-group {!! !empty($errors->first('header'))?'has-error':'' !!}">
            {!!Form::label('header', 'article header')!!}
            {!!Form::text('header', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('slug', 'slug')!!}
            {!!Form::text('slug', null, ['class'=>'form-control'])!!}
        </div>

        


        <div class="form-group">
            {!!Form::label('text', 'text')!!}
            {!!Form::textarea('text', null, ['class'=>'form-control'])!!}
        </div>

  
        <div class="form-group">
            {!!Form::label('category_id', 'category_id')!!}
            {!!Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
        </div>
        
   
  
        <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="thumbnail" class="form-control" type="text" name="imgPath" value="{{$article->imgPath}}">
         </div>
         <div id="holder" style="margin-top:15px;max-height:100px;">
             <img src="{{$article->imgPath}}" style="margin-top:15px;max-height:100px;">
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
    CKEDITOR.replace('text', options);
    </script>



     <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
      $('#lfm').filemanager('image');
      $('#gallery-btn').filemanager('image');
    </script>
@endpush

