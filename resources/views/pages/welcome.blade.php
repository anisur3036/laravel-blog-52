@extends('main')
@section('title', 'Home')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to my Blog!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, velit exercitationem atque.</p>
      <p><a class="btn btn-primary btn-lg" href="/blog/" role="button">Popular Post</a></p>
    </div>
  </div>
</div><!-- end of .row -->

<div class="row">
  <div class="col-md-8">
    <div class="post">
      @foreach ($posts as $post)
      <h3>{{ $post->title }}</h3>
      <p>{{ substr($post->body, 0, 200) }}{{ strlen($post->body) > 50 ? "...": "" }}</p>
      <a href="{{ route('pages.single', $post->id) }}" class="btn btn-primary btn-sm">Read more..</a>
      @endforeach
    </div><!--  .post -->
    <hr>
  </div>
  <div class="col-md-3 col-md-offset-1">
    <h2>Sidebar</h2>
  </div><!--  .col-md-3 col-md-offset-1 -->
</div>
@endsection
@section('script')
  <script>
    console.log('Hello');
  </script>
@endsection
