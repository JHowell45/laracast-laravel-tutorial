@extends('layout')


@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
		</div>

		<div>
			<ul class="style1">
				@foreach ($articles as $article)
				<li class="first">
					<h3>
						<a href="{{ $article->path() }}"</a>
					</h3>
					<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
					<p>{{ $article->excerpt }}</p>
				</li>
				@endforeach
			</ul>
		</div>

		{{-- @foreach ($articles as $article)
			<div class="content">
				<div class="title">
					<h2>
					<a href="{{ $article->path() }}">
						{{ $article->title }}
					</a>
					</h2>
				</div>
			</div> --}}
	
	</div>
</div>
@endsection