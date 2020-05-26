@extends('layout')


@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Articles</h2>
		</div>

		<div>
			<ul class="style1">
				@foreach ($articles as $article)
				<li class="first">
					<h3>{{ $article->title }}</h3>
					<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
					<p>{{ $article->excerpt }}</p>
				</li>
				@endforeach
			</ul>
		</div>
	
	</div>
</div>
@endsection