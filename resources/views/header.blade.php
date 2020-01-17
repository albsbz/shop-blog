@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
	</script>
@endsection

@section('meta')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection



<div class="loginbar" >
	<div id="loginbarWrap">
	    @if (Auth::guest())
	        <a href="{{ url('/login') }}">Login</a>
	        <a href="{{ url('/register') }}">Register</a>
	    @else
	        <a href="{{ url('/logout') }}" 
	        	onclick="event.preventDefault();
	        	document.getElementById('logout-form').submit();">
	             Logout
	        </a>

	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
	    @endif
	    @auth
		<a href="{{url('/myorders')}}">My orders</a>
		@endauth
		@if(session()->get('cart'))
			<a href="{{ url('/cart') }}">
	             My cart
	        </a>
		@endif
	</div>
</div><hr>	
<div class="statusbar">
	<div class="welcome">
		<span>Welcome</span>@if (!Auth::guest())<span>{{', '.Auth::user()->name }}</span>
		@endif

	</div>
	<div class="logo">
		<a href="{{ url('/') }}">
			<img src="{{asset('images/logo.png')}}" alt="logo">
		</a>
	</div>

	<div class="cart">
		<a href="{{url('cart')}}">Shopingcart</a>
		<div class="cartQnt">{{array_sum(array_column((session()->get('cart')?session()->get('cart'):[]), 'qtt'))}}</div>
	</div>
</div>
<nav>
	<ul class="headerCategoriesWrap">
		<li class="headerCategories"><a href="../product">All Categories</a></li>
		@foreach ($mainCategories as $mainCategory)
		<li class="headerCategories dropdown"><a href="{{url('category/'.$mainCategory->slug)}}" class="dropbtn">{{$mainCategory->name}}</a>
		<div class="dropdown-content">
	      @foreach ($mainCategory->children as $subcategory)
			<a href="{{url('category/'.$subcategory->slug)}}">{{$subcategory->name}}</a>
		  @endforeach
   		</div>

		</li>
		@endforeach
			<li class="headerCategoriesNuller"></li>
			<li class="headerCategories headerCategoriesSmall"><a href="../article">Articles</a></li>
			<li class="headerCategories headerCategoriesSmall"><a href="../contacts">Contact us</a></li>

		<li class="search">
			<form action="/search" >
		      <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="s">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		    </form>
		</li>
	</ul>
</nav>
<hr>
<div class="salebar">
	<ul>
		<li>Got a question</li>
		<li>Free shipping</li>
		<li>Get 15% off</li>
	</ul>
</div>

@section('jss')
@parent
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("loginbarWrap");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    header.classList.add("animated");
    header.classList.add("slideInDown");
  } else {
    header.classList.remove("sticky");
    header.classList.remove("animated");
    header.classList.remove("slideInDown");
  }
}
</script>

@endsection
