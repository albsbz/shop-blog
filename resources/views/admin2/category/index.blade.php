@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @include ('parts.success')
    <table class="table table-bordered" id="category-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>imgPath</th>
                <th>slug</th>
                <th>Edit</th>
            </tr>
        </thead>
    </table>
    <a href="{{route('categories.create')}}" class="btn btn-primary">Add category</a>
@stop

@push('js')
<script>
$(function() {
    var table=$('#category-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allcategories') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'imgPath', name: 'imgPath' },
            { data: 'slug', name: 'created_at' },
            
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#category-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin2/categories/'+id,
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

