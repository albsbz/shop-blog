@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/footer.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500" rel="stylesheet">
@endsection
<hr>
<div class="icons">
	<a href="#"><i class="fab fa-facebook"></i></a>
	<a href="#"><i class="fab fa-twitter-square"></i></a>
	<a href="#"><i class="fab fa-viber"></i></a>
	<a href="#"><i class="fab fa-telegram"></i></a>
</div>
<hr>
<div class="footerSection">
	@foreach($articleCategories as $articleCategory)
	<section>
		<h3><a href="{{url('article-category/'.$articleCategory->slug)}}">{{$articleCategory->name}}</a></h3>
		<ul>
			@foreach($articleCategory->article as $article)
			<li><a href="../article/{{$article->slug}}">{{$article->header}}</a></li>
			@endforeach
		</ul>
	</section>
	@endforeach
	
	<section id="logo2">
		<img src="{{asset('images/logo.png')}}" alt="logo">
		<div class="sometxt">{!!$contacts->shorttext!!}</div>
		<div class="icons2">
		<a href="#"><i class="fab fa-facebook"></i></a>
	<a href="#"><i class="fab fa-twitter-square"></i></a>
	<a href="#"><i class="fab fa-viber"></i></a>
	<a href="#"><i class="fab fa-telegram"></i></a>
		</div>
	</section>
</div>
