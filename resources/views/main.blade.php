@include('partials._head')
  <body>
@include('partials._nav')

<div class="container">
	@include('partials._messages')
  @yield('content')
  <hr>
  <p class="text-center">Copyright Anis - All Rights Reserved</p>
</div>
@include('partials._footer')
