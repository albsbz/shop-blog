
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">

@endsection


{{-- {{dd($cart)}} --}}

	

		@foreach ($orders as $order)
			<div class="cartOrders">
				
				<div class="orderItems">
					<table>
						<thead>
							<tr>
								<th>IMG</th>
								<th>name</th>
								<th>qnt</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($order->order_items as $item)
							<tr>
								<td><img src="{{$item->product->imgPath}}" class="orderImg" alt=""></td>
								<td>{{$item->product->name}}</td>
								<td>{{$item->qtt}}</td>
								<td>{{$item->price}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
		
				</div>
					<div class="orderData">
						<div>Order_id: #{{$order->id}}</div>
						<div>Date: {{date('d-m-Y', strtotime($order->updated_at))}}</div>
						<div>Order total ptice: {{$order->price}}</div>
						<div >Order status: <span class="orderStatus">{{$order->status}}</span></div>
						@if ($order->status=='1')
							<div id="lpay_form">
								<a href="" class="lpay_btn btn">Pay</a>
								{!!App\Http\Controllers\OrderController::payAgain($order->id)!!}
							</div>

							{{-- <div id="lpay_form">{{dd($this)}}</div> --}}
						@endif
					</div>
				
			</div>
		@endforeach
			
	<style>
		.orderImg{width:50px;}
		.cartOrders{
			border: 1px dashed gray;
		    position: relative;
		    display: flex;
		    flex-wrap: wrap;
		    align-items: flex-start;
		    justify-content: center;

		    margin: 10px 15vw;
			display: flex;
			/*justify-content: space-between;*/
		}
		.orderItems{
			/*flex-basis: 50%; */
			display: flex;
	justify-content: space-around;
		}
		div.orderData{
			/*width: 100%;*/
			margin: 20px;
			align-items: baseline;
			display:flex;
			flex-direction: column;
			/*flex-wrap: wrap;*/
			/*flex-basis: 70%;*/
		}

	</style>
	
	

	<script>
	(function ($) {
	$(function () {
		$('.orderStatus').each(function(){
			obj=$(this);
			console.log(obj.html());
			switch (obj.html()) {
			  case '0':
			    obj.html('Order canceled');
			    break;
			  case '1':
			    obj.html('Wait for pay');
			    break;
			  case '2':
			    obj.html('Wait for delivery');
			    break;
			  case '3':
			    obj.html('Order completed');
			    break;
			}
			
		})
		$('.lpay_btn').on('click', function(e){
			$(this).parent().find('form').attr('target','_blank').submit();
			e.preventDefault();
		})

	})
	})(jQuery)
	</script>
