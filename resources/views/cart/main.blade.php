
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">

@endsection
	@if ($cart!=[])
		<form id="delAll">
	   	  <input type="submit" value="Clear cart" class="btn btn-red">
	   	  <input name="i" type="hidden" value="all">
		</form>

		{!!Form::open(['url' => 'changeqtt', 'method' => 'post'])!!}
			@for ($i = 0; $i < count($cart); $i++)
				<div class="cartItem">
					<img src="{{$cart[$i]['img']}}" alt="product">
					<div class="cartData">
						<h3>{{$cart[$i]['name']}}</h3>
						{!!Form::label('qtt', 'quantity: ')!!}
						{!!Form::number('qtt[]', $cart[$i]['qtt'], ['min'=>1, 'class' => 'form-control'] )!!}

						@if (isset($cart[$i]['price']))
							<p>price: <span class="price">{{$cart[$i]['price']}}</span></p>
							<p>Position total: <span class="itemTotal">{{$cart[$i]['price']*$cart[$i]['qtt']}}</span></p>
						@endif
						
						{!!Form::hidden('i', $i)!!}
					</div>
					<button class="destroyOne btn" data-i="{{$i}}">X</button>
				</div>
			@endfor
			{!!Form::submit('Buy', ['name'=>'submit', 'class'=>'btn btn-submit']);!!}
		{!! Form::close() !!}
	@endif
	<p>Total: <span class="total">{{$total}}</span></p>

	

@section('jss')
@parent
<script>
	$(document).ready(function() {
	    $.ajaxSetup({
		    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
			});
		$('#delAll').on('submit', function(e){
	        let form = $(this);
	        $.ajax({
	        	type:"post",
	        	data: form.serialize(),

	            url: "../da",
	            success: function(data){
	            	$('.cartQnt').html(data);
	            	$('.cartItem').each(
	            		function(){
	            			$(this).html(' ');
	            		}
	            	);
	            	$('.btn-submit').hide();
	            	$('.total').html('0.00');
	            	window.location.replace('/');
	            },
	            error: function(xhr, textStatus, thrownError) {
	            alert(' Error');
	        	}
	        });
	       e.preventDefault();
		});	
		$('.destroyOne').on('click', function(e){
	        var i=$(this).attr('data-i');
	        console.log(i);
	        $.ajax({
	        	type:"post",
	        	data: {i:i},
	            url: "../do",
	            success: function(data){
	            	$('.cartQnt').html(data);
	            	$("button[data-i='"+i+"']").parent().remove();
	            	if($('.cartItem').length==0){
	            		$('.btn-submit').hide();
	            		$('.total').html('0.00');
	            		window.location.replace('/');
	            	}
	            },
	            error: function(xhr, textStatus, thrownError) {
	            alert(' Error');
	        	}
	        });
	       e.preventDefault();
		});	
		$(document).on('change', '.form-control', function(e){
			newTotal=$(e.target).parents('.cartItem').find('.price').html()*$(e.target).val();
			$(e.target).parents('.cartItem').find('.itemTotal').html(newTotal.toFixed(2));
			let sum=0;
			$('.itemTotal').each(function(){
				sum+=parseFloat($(this).html())
			});
			$('.total').html(sum.toFixed(2));
		})
	});
</script>

@endsection