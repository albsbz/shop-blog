@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @include ('parts.success')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Phone</th>
                <th>Roles</th>
                <th>Edit</th>
            </tr>
        </thead>
    </table>
    <a href="{{route('users.create')}}" class="btn btn-primary">Add user</a>
@stop

@push('js')
<script>
$(function() {
    var table=$('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('allusers') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'phone', name: 'phone' },
            { data: 'roles', name: 'roles.name' },
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#users-table').on('click', '.btn-danger', function(){
        let id=$(this).attr('data-id');
        $.ajax({
            url: '/admin/users/'+id,
            type:'DELETE',

            success: function(){
                table.row($(this).parents('tr')).remove().draw();
            }
        })
    });
});


</script>
@endpush

