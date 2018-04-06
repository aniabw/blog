@extends ('posts.layouts.master')


@section ('content')
<div class="col-sm-8 blog-main">
  <h1>Register</h1>
  <hr />
  <form method="POST" action="/laravel/blog/public/register">
   {{ csrf_field() }}  <!-- this is special token creating uniue id to protect from attack -->
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
  </div>
 
  <div class="form-group"> <!-- form-group div used for spacing around button -->
	<button type="submit" class="btn btn-primary">Register</button>
  </div>
  @include('posts.layouts.error')
</form>


</div>  
@endsection