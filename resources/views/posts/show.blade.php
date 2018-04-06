@extends ('posts.layouts.master')


@section ('content')
	<div class="col-sm-8 blog-main">
	  <h2 class="blog-post-title">{{ $post->title }} </h2>
	  <p class="blog-post-meta">{{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</p>

	  <p>{{ $post->body }}</p>
	  
	  
	  @if (count($post->tags))
	     Tags:<br />
			@foreach ($post->tags as $tag) 
			
				<a href="/laravel/blog/public/posts/tags/{{ $tag->name }}">
					{{ $tag->name }} <br />
				</a>
			
			@endforeach
	  @endif
	  
	  <hr />
	  
	  
	  <div class="comments">
		<ul class="list-group">
			@foreach ($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}: &nbsp;
					</strong>
					{{ $comment->body }}
				</li>
			@endforeach
		</ul>
		</div>
		
		<hr />
		<div class="card">
			<div class="card-block">
			  <form method="POST" action="/laravel/blog/public/posts/{{ $post->id }}/comments">
			   {{ csrf_field() }}  <!-- this is special token creating uniue id to protect from attack -->
			  <div class="form-group">
				<textarea class="form-control" name="body" placeholder="Your comment here" required></textarea>
			  </div>
			 
			  <div class="form-group"> <!-- form-group div used for spacing around button -->
				<button type="submit" class="btn btn-primary">Add comment</button>
			  </div>
			 </div> 
		</div>	  
			  @include('posts.layouts.error')
	  
	</div>  
@endsection