@extends('main')
@section('title', 'Edit Post')
@section('content')
<div class="row">
	{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
	<div class="col-md-8">
			{{ Form::label('title', 'Titles:') }}
			{{ Form::text('title', null, ['class' => 'form-control input-lg mb-20']) }}
			{{ Form::label('body', 'Content:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Create At:</dt>
				<dd>{{ $post->created_at->diffForHumans() }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ $post->updated_at->diffForHumans() }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
				</div>
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.update', 'Save Changes', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection
