@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')
    @if(empty($product->name))
      {!!Form::model($product, ['route'=>'products.store'])!!}
    @else
     {!!Form::model($product, ['route'=>['products.update', $product->id], 'method'=>'PUT'])!!}
    @endif
        <div class="form-group {!! !empty($errors->first('name'))?'has-error':'' !!}">
            {!!Form::label('name', 'User name')!!}
            {!!Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('slug', 'slug')!!}
            {!!Form::text('slug', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('price', 'price')!!}
            {!!Form::text('price', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!!Form::label('description', 'description')!!}
            {!!Form::textarea('description', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('instock', 'instock')!!}
            {!!Form::checkbox('instock', 1 ,null)!!}
        </div>

        <div class="form-group">
            {!!Form::label('recommended', 'recommended')!!}
            {!!Form::checkbox('recommended', 1 ,null)!!}
        </div>

        <div class="form-group">
            {!!Form::label('category_id', 'category_id')!!}
            {!!Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
        </div>
        
        
        <div class="form-group">
            {!!Form::submit('Save', ['class'=>'btn btn-primary'])!!}
        </div>

        <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="thumbnail" class="form-control" type="text" name="imgPath" value="{{$product->imgPath}}">
         </div>
         <div id="holder" style="margin-top:15px;max-height:100px;">
             <img src="{{$product->imgPath}}" style="margin-top:15px;max-height:100px;">
         </div> {{-- img->div
         </div> --}}



        <div class="input-group">
           <span class="input-group-btn">
             <a id="gallery-btn" data-input="gallery-thumbnail" data-preview="gallery-holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="gallery-thumbnail" class="form-control" type="text" name="gallery"
            value="{{$product->gallery?implode(',', json_decode($product->gallery)):''}}">
         </div>
         <div id="gallery-holder" style="margin-top:15px;max-height:100px;">
             @if (json_decode($product->gallery))
             @foreach(json_decode($product->gallery) as $path)
                 <img src="{{$path}}" style="margin-top:15px;max-height:100px;">
             @endforeach
             @endif
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
    CKEDITOR.replace('description', options);
    </script>



     <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
      $('#lfm').filemanager('image');
      $('#gallery-btn').filemanager('image');
    </script>
@endpush

