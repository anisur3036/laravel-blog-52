@extends('main')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
  	<h1>Contact</h1>
  	<form action="#" method="POST" role="form">

  		<div class="form-group">
  			<label for="email">Email:</label>
  			<input type="text" name="email" class="form-control" id="email" placeholder="Input field">
  		</div>

			<div class="form-group">
  			<label for="name">Name:</label>
  			<input type="text" name="name" class="form-control" id="name" placeholder="Input field">
  		</div>

			<div class="form-group">
  			<label for="message">Message:</label>
  			<textarea name="message" id="message" class="form-control" rows="6" required="required"></textarea>
  		</div>

  		<button type="button" class="btn btn-primary">Send</button>
  	</form>
  </div>
</div>
@endsection
