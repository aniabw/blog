@extends ('posts.layouts.master')


@section ('content')
<div class="col-sm-8 blog-main">
  <h1>Publish post</h1>
  <hr />
  <form method="POST" action="/laravel/blog/public/posts">
   {{ csrf_field() }}  <!-- this is special token creating uniue id to protect from attack -->
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body"></textarea>
  </div>
 
  <div class="form-group"> <!-- form-group div used for spacing around button -->
	<button type="submit" class="btn btn-primary">Publish</button>
  </div>
  @include('posts.layouts.error')
</form>


</div>  
@endsection