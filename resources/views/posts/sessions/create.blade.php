@extends ('posts.layouts.master')


@section ('content')
<div class="col-sm-8 blog-main">
  <h1>Sign In</h1>
  <hr />
  <form method="POST" action="/laravel/blog/public/login">
   {{ csrf_field() }}  <!-- this is special token creating uniue id to protect from attack -->
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  
 
  <div class="form-group"> <!-- form-group div used for spacing around button -->
	<button type="submit" class="btn btn-primary">Sign In</button>
  </div>
  @include('posts.layouts.error')
</form>


</div>  
@endsection