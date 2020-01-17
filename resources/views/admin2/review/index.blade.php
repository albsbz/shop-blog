@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @include ('parts.success')
 {{-- {{dd($reviews)}} --}}
 

    <table class="table table-bordered" id="review-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product id</th>
                <th>Product name</th>
                <th>User id</th>
                <th>User name</th>
                <th>Text</th>
                <th>Rating</th>
                <th>Edit</th>
            </tr>
        </thead>
    </table>
@stop

@push('js')
<script>
$(function() {
    var table=$('#review-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allreviews') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'product_id', name: 'product_id' },
            { data: 'product_name', name: 'product_name' },
            { data: 'user_id', name: 'user_id' },
            { data: 'user_name', name: 'user_name' },
            { data: 'text', name: 'text' },
            { data: 'rating', name: 'rating' },
            {data: 'action', name: 'action', orderable: false, searchable: false}        
            ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#review-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin2/reviews/'+id,
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

