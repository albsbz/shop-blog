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
                <th>Name</th>
                <th>category</th>
                <th>price</th>
                <th>Edit</th>
                <th>In stock</th>
                <th>Recommended</th>
            </tr>
        </thead>
    </table>
    <a href="{{route('products.create')}}" class="btn btn-primary">Add product</a>
    <a href="{{url('admin2/products-export')}}" class="btn btn-primary">Export products</a>
    <form action="{{url('admin2/products-import')}}" method="post" enctype="multipart/form-data">
         <input type="file" name="myFile">
         <input type="hidden" name="_token" value="{{ csrf_token() }}"  >
         <input type="submit">
    </form>
@stop

@push('js')
<script>
$(function() {
    var table=$('#products-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allproducts') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'imgPath', name: 'imgPath' },
            { data: 'name', name: 'name' },
            { data: 'category', name: 'category' },
            { data: 'price', name: 'price' },
            {data: 'action', name: 'action', orderable: false, searchable: false},
            { data: 'instock', name: 'instock', searchable: false },
            { data: 'recommended', name: 'recommended', searchable: false }
        ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#products-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin2/products/'+id,
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

