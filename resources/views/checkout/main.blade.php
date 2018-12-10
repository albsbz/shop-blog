
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">
	<style>
		.prImg{width:100px;}
		.userData{
			max-width: 350px;
			display:block;
		}
		label{
			max-width: 300px;
			display: flex;

			justify-content: space-between;

		}
		input.form-control, select.soflow{
			align-self: flex-end;
			width:130px;
		}
		.userData label{margin:5px;}
		#paymethod{
		color:#000;
	}
	</style>
@endsection

	
<div class="alert alert-danger print-error-msg" style="display:none">
    <ul>
	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
	</ul>
</div>

@if ($cart!=[])

	<form id="order">
		<div class="userData">
			<label for="name">Name: 
			<input class="form-control" name="name" type="text" value="{{$user->name}}" id="name">
			</label>

			<label for="phone">Phone: 
			<span> +
			<input class="form-control" name="phone" type="text" value="{{$user->phone}}" id="phone"></span>
			</label>

			<label for="email">Email: 
			<input class="form-control" name="email" type="text" value="{{$user->email}}" id="email">
			</label>

			<label for="address">Shipping adress: 
			<input class="form-control" name="address" type="text" value="{{$user->address}}" id="address">
			</label>

			<label for="paymethod">Pay method: 
			<select id="paymethod" name="paymethod" class="soflow"><option value="od" selected="selected">On delivery</option><option value="lp">LiqPAy</option></select>
			</label>

		</div>
	
			@for ($i = 0; $i < count($cart); $i++)
				<div class="cartItem">
					@if (isset($cart[$i]['img']) )
						<img src="{{$cart[$i]['img']}}" alt="product" class="prImg">
					@endif
					<div class="cartData">
						<p>id: {{$cart[$i]['id']}} </p>
						<label for="qtt">quantity: </label>
						<input min="1" class="form-control" name="qtt[]" type="number" value="{{$cart[$i]['qtt']}}">

						@if (isset($cart[$i]['price']))
							<p>price: <span class="price">{{$cart[$i]['price']}}</span></p>
							<p>Position total: <span class="itemTotal">{{$cart[$i]['price']*$cart[$i]['qtt']}}</span></p>
						@endif
						<input name="id[]" type="hidden" value="{{$cart[$i]['id']}}">
						<input name="i" type="hidden" value="{{$i}}">
					</div>
					<button class="destroyOne btn" data-i="{{$i}}" >X</button>
				</div>
			@endfor
			<input name="store" type="submit" value="Submit order!" class="btn-submit">
	</form>
		
	<form id="delAll">
   	  <input type="submit" value="Clear cart" class="btn btn-red">
   	  <input name="i" type="hidden" value="all">
	</form>
@endif		
	
	<div id="lpay_form" style="display:none"></div>

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
				$('.alert-danger').hide();
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
		            	$("input[name=i][value='"+i+"']").parent().parent().remove();
		            	if($('.cartItem').length==0){
		            		$('.btn-submit').hide();
		            		$('.total').html('0.00');
		            		window.location.replace('/');
		            	}
		            },
		        });
		       e.preventDefault();
        	});	
			$('#order').on('submit', function(e){
		        let form = $(this);
		        $.ajax({
		        	type:"post",
		        	data: form.serialize(),
		            url: "../order",
		            success: function(data){
					if (data === 'onDelivery') {
		            		window.location.replace('/');
		            	}
		            else {
	            		  $('#lpay_form').empty().html(data);
						  $('#lpay_form form').submit(); 
	               		  $('.cartQnt').html(data);
		            	}
		            },
		            error: function(request) {
						$('.alert-danger').html('');
						json = $.parseJSON(request.responseText);
                		$.each(json.errors, function(key, value){
							$('.alert-danger').show();
							$('.alert-danger').append('<p>'+value+'</p>');
						});
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