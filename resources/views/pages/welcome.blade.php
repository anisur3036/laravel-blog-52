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
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus ut, voluptatem maiores, reprehenderit, temporibus optio laboriosam tempora quibusdam beatae iste ipsum dolores deserunt natus dolorum. Omnis impedit esse quos.</p>
      <a href="#" class="btn btn-primary btn-sm">Read more..</a>
    </div><!--  .post -->
    <hr>
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus ut, voluptatem maiores, reprehenderit, temporibus optio laboriosam tempora quibusdam beatae iste ipsum dolores deserunt natus dolorum. Omnis impedit esse quos.</p>
      <a href="#" class="btn btn-primary btn-sm">Read more..</a>
    </div><!--  .post -->
    <hr>
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus ut, voluptatem maiores, reprehenderit, temporibus optio laboriosam tempora quibusdam beatae iste ipsum dolores deserunt natus dolorum. Omnis impedit esse quos.</p>
      <a href="#" class="btn btn-primary btn-sm">Read more..</a>
    </div><!--  .post -->
    <hr>
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus ut, voluptatem maiores, reprehenderit, temporibus optio laboriosam tempora quibusdam beatae iste ipsum dolores deserunt natus dolorum. Omnis impedit esse quos.</p>
      <a href="#" class="btn btn-primary btn-sm">Read more..</a>
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
