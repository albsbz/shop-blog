
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/search/main.css')}}">
@endsection

{{-- {{dd($allproducts->get())}} --}}
<div class="topper">
	<div class="carousel">
		<img src="{{asset('images/carousel.JPG')}}" alt="carousel">
	</div>

	 <div class="underCartBar">
		<div>
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li>{{array_slice(explode('/', (url()->current())), -1)[0]}}</li>
			</ul>
		</div>
		<div>
			Showing {{$products->firstItem()}}-{{$products->lastItem()}} of {{$products->total()}} results
		</div>
	</div>

	<div class="mainbar">
		<div class="barname">SEARCH RESULT</div>
		
	</div>
</div>
{{-- {{print_r($products)}} --}}
{{-- {{dd($descendants)}} --}}


<div class="products">
	@foreach ($products as $product)
			<section class="productSession">
			<a href="../product/{{$product->slug}}">
			   	<img src="{{$product->imgPath}}" alt="product">
			</a>
				<span class="productName">
					<a href="../product/{{$product->slug}}">
						{{$product->name}}
					</a>
				</span>
				<span class="productPrice">${{$product->price}}</span>
				<span>
					<a class="productCat" href="{{url('category/'.$product->category->slug)}}">
						{{$product->category->name}}
					</a>
				</span>
			</section>
	@endforeach
</div>
<div class="pages">
	{{$products->links()}}
</div>

@section('jss')
@parent
<script>
	
</script>

@endsection