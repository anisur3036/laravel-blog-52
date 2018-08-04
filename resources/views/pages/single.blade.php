@extends('main')
@section('title', 'View Post')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{{ $post->body }}</p>
			<p>Created At: {{ $post->created_at->diffForHumans() }} Updated At: {{ $post->updated_at->diffForHumans() }}</p>
	</div>
</div>
@endsection
