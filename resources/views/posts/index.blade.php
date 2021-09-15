@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts)>0)
	<div class="card">
		<ul class="list-group list-group-flush">
		@foreach($posts as $post)
			<li class="list-group-item">
				<h3><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}}</small>
			</li>

		@endforeach
		</ul>
	</div>
	@else

	@endif
@endsection