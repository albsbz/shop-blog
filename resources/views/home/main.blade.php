
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/home/main.css')}}">
	<style>


	</style>
@endsection

<div class="innerwraper">
	<div class="masonry">
	
		@foreach($categories as $category)
			
				<div class="item">
				
						<img src="{{$category->imgPath}}" alt="product" class="grid-item" >
						<div><a href="../category/{{$category->slug}}">
							<h3>{{$category->name}}</h3>
							{!!$category->description!!}</a>
						</div> 
				
				{{-- {{dd($categories)}} --}}
				</div>
			
		@endforeach

	</div>
	
</div>

@section('jss')
@parent


<script>


</script>
@endsection