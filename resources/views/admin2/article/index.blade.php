@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @include ('parts.success')
    <table class="table table-bordered" id="products-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>imgPath</th>
                <th>header</th>
                <th>category</th>
                <th>slug</th>
                <th>Edit</th>
            </tr>
        </thead>
    </table>
    <a href="{{route('articles.create')}}" class="btn btn-primary">Add articles</a>
@stop

@push('js')
<script>
$(function() {
    var table=$('#products-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allarticles') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'imgPath', name: 'imgPath' },
            { data: 'header', name: 'header' },
            { data: 'category', name: 'category' },
            { data: 'slug', name: 'slug' },
            {data: 'action', name: 'action', orderable: false, searchable: false}        ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#articles-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin2/articles/'+id,
            type:'DELETE',
            // data:{
            //     id: 1,
            //     name: 'ggg'
            // }
            success: function(){
                table.row($(this).parents('tr')).remove().draw();
            }
        })
    });
});


</script>
@endpush

{{-- add     <meta name="csrf-token" content="{{ csrf_token() }}">     to vaendor/adminlte/master --}}

