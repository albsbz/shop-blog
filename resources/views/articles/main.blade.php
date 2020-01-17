
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/article/main.css')}}">
	<style>
		h2{text-align: center}
		.readMore{
			color:lightgray;
			font-size: 0.8em;
		}
		.header:hover{
			color: gray;
			transition: all 0.3s ease 0s;
		}
		.articleImg{
			max-width:100px;
			max-height: 100px;
			object-fit: cover;
			float: left;
			margin-right: 10px;
		}
	</style>
@endsection
{{-- {{dd($articles[0]->category)}} --}}
{{ Breadcrumbs::render(\Request::route()->getName(), $articles[0]->category) }}
@foreach ($articles as $article)
	<div>
		<h2>
			<a class="header" href="{{url('article/'.$article->slug)}}">
			{{$article->header}}
			</a>
		</h2>
		@if ($article->imgPath)
			<img src="{{$article->imgPath}}" alt="articleImg" class="articleImg">
		@endif
		<p>
			{!!
				str_limit(strip_tags($article->text), 200, '<a class="readMore" href="'.url('article/'.$article->slug).'"> (read more...)</a>')
			!!}
		</p>
	</div>
	<hr class="hr2">
@endforeach
<div class="pages">
{{$articles->links()}}
</div>


		
@section('jss')
@parent
<script>
	
</script>

@endsection