@extends('layouts.parent')
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/contact/main.css')}}">
	<style>
	p{
		text-align: justify;
		text-indent: 1.5em;
	}
	.headImg{
		display: block;
		margin:0 auto;
		width:100%;
		height: 300px;
		object-fit: cover;

	}
	#feedback{
		float:right;
		display: flex;
		flex-direction: column;
		/*width: 1fr;*/
		justify-content: space-between;
		align-items: baseline;
	}
	#feedback textarea, #feedback input{
		width:100%;
	}
	.scope{width:100%;}
	.contact-wrapper{
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: space-around;
		text-align: center;
	}
</style>
@endsection

@section('header')
    @include('header')
@endsection

@section('main')

<div class="scope" itemscope itemtype="http://schema.org/LocalBusiness">
  <h1><span itemprop="name">{{$contact->shopname}}</span></h1>
  <iframe src="{{$contact->mapsrc}}" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul>
		@foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
		</ul>
    </div>
    <div class="contact-wrapper">
		<div>
			<span itemprop="description"> 
				{!!$contact->text!!}
			</span>
			<br>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span itemprop="streetAddress">
				{{$contact->address}}
			</span>
			</span>
			<br>
			Phone: 
			<span itemprop="telephone">
				<a href="tel:{{$contact->phone}}">
					{{$contact->phone}}
				</a>
			</span>
			<br>
		  
			<a href="mailto:{{$contact->email}}" itemprop="email">
					{{$contact->email}}
			</a><br>
			<a href="{{url('/')}}" itemprop="url">
				{{url('')}}
			</a>
			
		</div>
		<form id="feedback">
			<label>Name: <br>
			<input type="text" name="name" placeholder="Your name" value="{{null !== (Auth::user())?Auth::user()->name:''}}"></label>
			<label>Email: <br>
			<input type="email" name="email" placeholder="Your e-mail" value="{{null !== (Auth::user())?Auth::user()->email:''}}"></label>
			<label>Feedback: <br>
			<textarea name="feedback" placeholder="Your feedback"></textarea></label>
			<button class="btn btn-success" type="submit">Send</button>
		</form>
	</div>

</div>
		
@endsection

@section('footer')
    @include('footer')
@endsection
 
@section('jss')
@parent
<script>
	$(document).ready(function() {
	    $.ajaxSetup({
		    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
			});

		$('#feedback').on('submit', function(e){
			
	        let form = $(this);
	        $.ajax({
	        	type:"post",
	        	data: form.serialize(),

	            url: "../feedback",
	            success: function(data){
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
	});
</script>

@endsection