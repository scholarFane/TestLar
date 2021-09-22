@extends('layouts.app')

@section('content')
	<a href="{{ route('posts.index') }}" class="btn btn-primary">Go back</a>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<p>{!! nl2br(e($post->body)) !!}</p>
	<hr>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comment-title">
				<span class="glyphicon glyphicon-comment">{{$post->comment}}</span>
				@foreach ($post->comments as $key => $value)
					<div class="comment">
						<div class="row">
							<div class="author-info">
								<div class="col-md-1">
									<img src="{{ 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($value->email))) . '?s=50&d-monsterid' }}" class="author-image">
								</div>

								<div class="col-md-9">
									<div class="author-name">
										<h4> {{ $value->name }} </h4>
										<p class="author-time"> {{ date('F nS, Y - gi:A', strtotime($value->created_at)) }} </p>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-content">
							{{ $value->comment }}
						</div>
						<br>
						<br>
						<hr>	
					</div>
				@endforeach
			</h3>
		</div>
	</div>

	<div class="row">
		<div id="comment-form" style="margin-top: 50px;" class="col-md-8 col-md-offset-2">
			{{ Form::open(['route'=>['comment.store', $post->id], 'method' => 'POST']) }}
				<div class="row">
					<div class="col-md-6">
						{{ form::label('name', "Name :") }}
						{{ form::text('name', NULL, ['class' => 'form-control']) }}

					</div>

					<div class="col-md-6">
						{{ form::label('email', "Email :") }}
						{{ form::text('email', NULL, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ form::hidden('post_id', $post->id, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ form::label('comment', "Comment :") }}
						{{ form::textarea('comment', NULL, ['class' => 'form-control', 'row' => '50']) }}

						{{ form::submit('Add comment', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:15px']) }}
					</div>

				</div>
			{{ Form::close() }}
		</div>

	</div>
@endsection