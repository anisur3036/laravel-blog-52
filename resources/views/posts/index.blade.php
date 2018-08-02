@extends('main')
@section('title', 'View Post')
@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-spacing">Create New Post</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td>{{ substr($post->title, 0, 20) }}</td>
						<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "...": "" }}</td>
						<td>{{ $post->created_at->diffForHumans() }}</td>
						<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
