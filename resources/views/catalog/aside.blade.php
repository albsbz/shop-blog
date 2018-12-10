
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/catalog/aside.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui/jquery-ui.theme.css')}}">
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	
@endsection

<div id="category">
	<h3>CATEGORY</h3>
	<ul>
		@foreach ($mainCategories as $mainCategory)
		<li class="category">
			<p>
				<a href="{{url('category/'.$mainCategory->slug)}}">{{$mainCategory->name}}</a>
				<span class="plus">▼</span></p>
			<ul>
				@foreach ($mainCategory->children as $subcategory)
				<li class="subcategory">
					<a href="{{url('category/'.$subcategory->slug)}}">{{$subcategory->name}}</a>
				</li>
				@endforeach
				
			</ul>
		</li>
		@endforeach
	</ul>
</div>
<div id="filter">

  <label for="amount" class="label">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#12B844; font-weight:bold;">
  <div id="slider-range" ></div>
  <button id="clearPriceFilter" class="btn">Clear Price Range</button>
</div>


<div id="latestPrdct">
	<h3>Latest products</h3>
	@foreach($products as $product)
	<a href="../product/{{$product->slug}}">
	<div class="card1">
		<img src="{{url($product->imgPath)}}" alt="lamber">
		<div>
			<span class="pname">{{$product->name}}</span><span class="price">{{$product->price}}$</span>
		</div>
	</div>
	</a>
	@endforeach
	
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
			  
			$("#slider-range").slider({
				range: true,
				min: parseInt({{floor($filterValues['min'])}}),
				max: parseInt({{ceil($filterValues['max'])}}),
				values: [parseInt({{floor($filterValues['currentMin'])}}), parseInt({{ceil($filterValues['currentMax'])}})],
				step:1,
				slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				},
				stop: function (event, ui) {
					$.ajax({
						type:"get",
						data: {
							priceFilter: {
								currentMin:ui.values[0],
								currentMax:ui.values[1]
							}
						},
						url: ("../"+window.location.pathname),
						success: function(newContent){
								document.open();
								document.write(newContent);
								document.close();
						},
					});
				},
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) +
			" - $" + $("#slider-range").slider("values", 1));

			$('#clearPriceFilter').click(function(){
				$.ajax({
						type:"post",
						url: "../clearFilter",
						success: function(newContent){
							window.location.reload();
						},
					});
			})
			$(document).on("click", ".plus", function(e){
				e.stopPropagation();
				$(this).parent().parent().find('.subcategory').toggle(400 );
			})
		})
		})(jQuery)
	</script>
@endsection