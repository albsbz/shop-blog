
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/article/main.css')}}">
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
	</style>	
@endsection
{{ Breadcrumbs::render(\Request::route()->getName(), $article) }}
@if ($article->imgPath)
	<img class="headImg" src="{{$article->imgPath}}" alt="article-head-img">
@endif
 <h1>{{$article->header}}</h1>
 <p class="articleText">{!!$article->text!!}</p>


	
@section('jss')
@parent
<script>
	
</script>

@endsection