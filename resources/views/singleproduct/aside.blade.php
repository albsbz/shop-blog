
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/aside.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
  	<link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
@endsection



<div class="sider">
	<div id="latestPrdct">
		<h4>OUR OFFERS</h4>
		@foreach($recomend as $product)
			<a href="../product/{{$product->slug}}">
				<div class="card1">
					<img src="{{$product->imgPath}}" alt="lamber">
					<div>
						<span class="pname">{{$product->name}}</span><span class="price">{{$product->price}}$</span>
					</div>
				</div>
			</a>
		@endforeach
		
	<div id="testimonials">
		<div class="flexdiv">
			<h4>TESTIMONIALS</h4>
		</div>
		<div class="carousel">
			@foreach($testimonials as $testimonial)
				<div>
					<p>{{$testimonial->text}}</p>
					<p class="qoutAuthor">--- {{$testimonial->author}}</p>
				</div>
			@endforeach
		</div>
	</div>
	<div id="banner">
		<img src="{{asset('images/banner.JPG')}}" alt="banner">
	</div>		
</div>

@section('jss')
@parent

 <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
 <script type="text/javascript">
    (function($){
      $(function(){
        $('.carousel').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: false,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 3000,
		});
      })
    })(jQuery)
  </script>

@endsection