
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">
	<link type="text/css" rel="stylesheet" media="all" href="https://unpkg.com/xzoom/dist/xzoom.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.1/jquery.fancybox.min.css" />
@endsection

{{ Breadcrumbs::render(\Request::route()->getName(), $currentproduct) }}
<div class="innerwraper">
	<div class="mainwraper">
		<div class="productPhoto">
			<div class="xzoom-container">
                <img class="xzoom" id="xzoom-default" src="{{
                	file_exists($currentproduct::getThumb($currentproduct->imgPath))?$currentproduct::getThumb($currentproduct->imgPath):$currentproduct->imgPath
                }}" xoriginal="{{$currentproduct->imgPath}}"/>

                <div class="xzoom-thumbs">
                	<a href="{{$currentproduct->imgPath}}">
                		<img class="xzoom-gallery"  src="{{
                			file_exists($currentproduct::getThumb($currentproduct->imgPath))?$currentproduct::getThumb($currentproduct->imgPath):$currentproduct->imgPath

                		}}" xpreview="{{$currentproduct->imgPath}}" title="The description goes here">
                	</a>
                	@foreach ($gallery as $galimg)
                    <a href="{{$galimg}}">
                    	<img class="xzoom-gallery" src="{{
                    	file_exists($currentproduct::getThumb($galimg))?$currentproduct::getThumb($galimg):$galimg
                    }}" xpreview="{{$galimg}}" title="The description goes here">
                	</a>
					@endforeach
                </div>
            </div>
		</div>
		<div class="chooser">
			<h3 class="productName">{{$currentproduct->name}}</h3>
			<a class="productCat" href="{{url('category/'.$currentproduct->category->slug)}}">
						{{$currentproduct->category->name}}
			</a>
			<h3 class="price">${{$currentproduct->price}}</h3>

			<form id="addCart">
				<label for="qtt">Quantity: </label>
				<input type="number" name="qtt" value="1" min="1" max="100" id='qtt'>
				 <input name="cartData" type="hidden" value="{{serialize(array($id))}}" id='cartData'><br>
				<button class="btn btn-success" type="submit">Add to cart</button>
				<button id="order" class="btn btn-blue">Buy in one click!</button>
			</form>
			
			<div class="descript">
				{!!$currentproduct->description!!}
			</div>
		</div>
		
		<div class="review">
			<h4>Reviews:</h4>
			<div class="reviewText">
				@foreach($currentproduct->reviews as $review)
					<div class="reviewItem">
						<span class='reviewItemName'>{{$review->user->name}}</span>
						<div class="rate">
							<span class='itemRate'>
							@for($i = 0; $i < ($review->rating); $i++)
								★
							@endfor
							</span>
						</div>
						<span class="reviewItemText">{{$review->text}}</span>
					</div>
				@endforeach
				
			</div>
			
			@auth
				<button class="reviewBtn btn">Add review</button>
			@endauth
		</div>
		<form id="reviewForm">
			<label for="review">Your review:
				<textarea name="review" id='reviewDesc' value="" rows="3"></textarea>
			</label>
			<div class="rating">
			<label>
			    <input type="radio" name="stars" value="1" />
			    <span class="icon">★</span>
			  </label>
			  <label>
			    <input type="radio" name="stars" value="2" />
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			  </label>
			  <label>
			    <input type="radio" name="stars" value="3" />
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>   
			  </label>
			  <label>
			    <input type="radio" name="stars" value="4" />
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			  </label>
			  <label>
			    <input type="radio" name="stars" value="5" checked="true"/>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			    <span class="icon">★</span>
			  </label>
			  </div>
				<button id="saveReview" type="submit">Make review!</button>
		</form>
	</div>
	<div class="relproduct">
		<h3>RELATED PRODUCTS</h3>
		<div class="products">
			@foreach ($related as $product)
				<section>
				<a href="../product/{{$product->slug}}">
				   	<img src="{{$product->imgPath}}" alt="product">
					<span class="productCat">{{$product->category->name}}</span>
					<span class="productName">{{$product->name}}</span>
					<span class="productPrice">${{$product->price}}</span>
				</a>
				</section>
			@endforeach
		</div>
	</div>
	@include('singleproduct.aside')

</div>

@section('jss')
@parent
<script src="{{asset('xzoom/js/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('xzoom/js/xzoom.min.js')}}"></script>
<script type="text/javascript">
(function ($) {
    $(document).ready(function() {
        //Manual closing xzoom if mouse out of main image area, because sometimes jQuery 'mouseleave' event not working properly.
        //Multiple Zooms on one page
        $('.xzoom').each(function() {
            //Initialization of xZoom here
            var instance = $(this).xzoom({position:'inside',
            hover:true}); //<-- Don't forget to add your options here
            $('.xzoom-gallery', $(this).parent()).each(function () {
                instance.xappend($(this));
            });
            var mobj = $(this);
            var mw = mobj.width(), mh = mobj.height();
            $(window).mousemove(function(event){
                var mx = event.pageX, my = event.pageY, moffset = mobj.offset(), mtop = moffset.top, mleft = moffset.left;
                //if (mx < mleft || mx > mleft + mw || my < mtop || my > mtop + mh) instance.closezoom();
            });
        });
        //Integration with fancybox version 3 plugin
        $(".xzoom:first").bind('click', function(event) {
            var xzoom = $(this).data('xzoom');
            xzoom.closezoom();
            var i, images = new Array();
            var gallery = xzoom.gallery().ogallery;
            var index = xzoom.gallery().index;
            for (i in gallery) {
                images[i] = {src: gallery[i]};
            }
            $.fancybox.open(images, {loop: false}, index);
            event.preventDefault();
        });
    });

    $(document).ready(function() {
	    $.ajaxSetup({
		    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
			});
		$('#addCart').on('submit', function(e){
	        let form = $(this);
	        $.ajax({
	        	type:"post",
	        	data: form.serialize(),
	            url: "../add",
	            success: function(data){
	            	// alert(data);
	                $('.cartQnt').html(data);
	            },
	            error: function(xhr, textStatus, thrownError) {
                alert(' Error');
            	}
	        });
	       e.preventDefault();
    	});
    	$('#order').on('click', function(e){
	        let form = $(this);
	        $.ajax({
	        	type:"post",
	        	data: {
	        		'qtt':$('#qtt').val(),
	        		'cartData':$('#cartData').val()
	        		},
	            url: "../add",
	            success: function(data){
	                window.location.replace('/checkout');
	            },
	            error: function(xhr, textStatus, thrownError) {
                alert(' Error');
            	}
	        });
	    	e.preventDefault();
    	});
    	$(document).on('click', '.avelibleImg', function(e){
    		$('.preview').attr('src', $(e.currentTarget).attr('src'));
    	});

    	$(document).on('click', '.reviewBtn', function(){
    		$('#reviewForm').slideToggle('1000');
    	})

    	$('#reviewForm').on('submit', function(e){
	        let form = $(this);
	        let currentText=form.find('#reviewDesc').val();
	         let currentRate=form.find('input:checked').val();
	         if (currentText!=''){
	         	if (form.find('#reviewDesc').removeClass('alert'));
	         	$.ajax({
		        	type:"post",
		        	data: {
		        		'text':currentText,
		        		'rating':currentRate,
		        		'product_id':{{$currentproduct->id}}
		        	},

		            url: "../review",
		            success: function(){
		            	// alert(data);
		            	console.log(currentRate);
		            	let stars='';
		            	for (var i = 0; i <  currentRate; i++) {
		            		console.log('a');
		            		stars=stars+'★';
		            	}
		            	
		                $('.reviewText').append(
		                	'<div class="reviewItem"><span class="reviewItemName">@auth{{\Auth::user()->name}}@endauth</span><div class="rate"><span class="itemRate">'+stars+'</span></div><span class="reviewItemText">'+currentText+'</span></div>'
		                	);
		            },
		            error: function(xhr, textStatus, thrownError) {
                    alert(' Error');
                	}
		        });
	         }
	      else {
	      	form.find('#reviewDesc').addClass('alert');
	      }
	       e.preventDefault();
    	});
	});

})(jQuery);
</script>

@endsection