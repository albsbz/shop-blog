@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include ('parts.error')

     {!!Form::model($order, ['route'=>['orders.update', $order->id], 'method'=>'PUT'])!!}
        <div class="form-group {!! !empty($errors->first('name'))?'has-error':'' !!}">
            {!!Form::label('id', 'id')!!}
            {!!Form::text('id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('user_name', 'user_name')!!}
            {!!Form::text('user_name', $order->user->name, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('price', 'Total order price')!!}
            {!!Form::text('price', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!!Form::label('address', 'address')!!}
            {!!Form::textarea('address', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('status', 'status')!!}
            {!!Form::select('status', [1,2,3,4], null, ['class'=>'form-control'])!!}
        </div>
       
        <div class="form-group">
            <table>
                 <thead>
                    <tr>
                        <th>in_order</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Item price</th>
                        <th>Qtt</th>
                        <th>Position total price</th>
                    </tr>
                </thead>
                <tbody>
                   {{--  {{dd($order_items)}} --}}
            @foreach ($order_items as $order_item) 
                 <tr>
                     <td> 
                        {!!Form::checkbox('inorder[]', 
                        $order_item->id,
                        true)!!}
                     </td>
                     <td>{{$order_item->id}}</td>
                     <td>{{$order_item->product->name}}</td>
                     <td>{{$order_item->price}}</td>
                     <td>{!!Form::number('qtt[]', 
                        $order_item->qtt,
                        ['value' => 1, 'min' => 1, 'max' => 100])!!}</td>
                    {{--  <td>{{$order_item->qtt}}</td> --}}
                     <td>{{($order_item->price)*($order_item->qtt)}}</td>
                 </tr>
            @endforeach 
                </tbody>
            </table>
        </div>

        <div class="form-group">
            {!!Form::submit('Save', ['class'=>'btn btn-primary'])!!}
        </div>
     {!!Form::close()!!}
@stop

@push('js')
<script>
    $('select').select2();

$("form").submit(function () {
    var this_master = $(this);
    this_master.find('input[type="checkbox"]').each( function () {
        var checkbox_this = $(this);
        if( !checkbox_this.is(":checked") == true ) {
            checkbox_this.prop('checked',true);
            checkbox_this.attr('value',checkbox_this.attr('value')+'-del');
        }
    })
})
</script>
@endpush
 <style>
     table { width: 80%;}
     td, th{border: 1px solid lightgray; text-align: center !important;padding:5px;}
 </style>