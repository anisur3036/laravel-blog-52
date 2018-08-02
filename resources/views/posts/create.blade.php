@extends('main')
@section('title', 'Create New Post')
@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Create New Post</h2>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('title', "Title:") }}
				{{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => 255]) }}

				{{ Form::label('body', "Content:") }}
				{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px' ]) }}
			{!! Form::close() !!}
	</div>
</div>
{{-- {{ var_dump($errors) }} --}}
@endsection
@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.3.2/parsley.min.js"></script>
@endsection
