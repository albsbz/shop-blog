
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/catalog/main.css')}}">
@endsection

<div class="topper">
	<div class="carousel">
		<img src="{{asset('images/carousel.JPG')}}" alt="carousel">
	</div>

	 <div class="underCartBar">
		{{ Breadcrumbs::render(\Request::route()->getName(), $breadcrumb_category) }}

	</div>

	<div class="mainbar">
			<span>	Showing {{$products->firstItem()}}-{{$products->lastItem()}} of {{$products->total()}} results</span>
		<div class="barname">Filter</div>
			<form class="sort">
				<div class="select">
					<select size="1" id="perPage" data-perpage="{{session('perPage')}}" class="select">
				       <optgroup label="Products on page">
					    <option value="1">1</option>
					    <option value="5">5</option>
					    <option value="15" selected>15</option>
					   </optgroup>
				   </select>
			   <div class="select__arrow"></div>
				</div>
				<div class="select">
				   <select size="1" id="orderBy" data-orderby="{{session('orderBy')}}" class="select">
				       <optgroup label="By price">
					    <option value="asc">Ascending</option>
					    <option value="desc">Descending</option>
					   </optgroup>
					   <optgroup label="By popularity">
					    <option value="pop" >Popular</option>
					    <option value="new" selected>New</option>
					   </optgroup>
				   </select>
			   <div class="select__arrow"></div>
				</div>
			</form>					
	</div>
</div>

<aside class="left">
			@include('catalog.aside')
</aside>

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
	(function ($) {
	$(function () {
		$.ajaxSetup({
		    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
		  });
		  
		$('#orderBy').change(
			function () {
				console.log(window.location.pathname);
				$.ajax({
						type:"get",
						data: {
							orderBy:$(this).val(),
						},
						url: window.location.pathname,
						success: function(newContent){
								document.open();
								document.write(newContent);
								document.close();
						},
				});
			},
		);
		let orderby=$('#orderBy').data('orderby');
		$("#orderBy option[value="+orderby+"]").attr("selected","selected");

		$('#perPage').change(
			function () {
				console.log(window.location.pathname);
				$.ajax({
						type:"get",
						data: {
							perPage:$(this).val(),
						},
						url: window.location.pathname,
						success: function(newContent){
								document.open();
								document.write(newContent);
								document.close();
						},
				});
			},
		);
		let perPage=$('#perPage').data('perpage');
		$("#perPage option[value="+perPage+"]").attr("selected","selected");
		$(document).on('click', 'div.barname', function(){
			$('aside').toggle();
		})

	})
	})(jQuery)
</script>

@endsection