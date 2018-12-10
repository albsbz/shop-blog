@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @include ('parts.success')
    <table class="table table-bordered" id="orders-table">
        <thead>
            <tr>
                <th>id</th>
                <th>user_name</th>
                <th>price</th>
                <th>address</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
    </table>
    {{-- <a href="{{route('order.create')}}" class="btn btn-primary">Add product</a> --}}
@stop

@push('js')
<script>
$(function() {
    var table=$('#orders-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allorders') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'user_name', name: 'user_name' },
            { data: 'price', name: 'name' },
            { data: 'address', name: 'address' },
            { data: 'status', name: 'status' },
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#orders-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin2/orders/'+id,
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

