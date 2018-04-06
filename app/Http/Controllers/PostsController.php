<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; 

class PostsController extends Controller
{
    public function __construct() {
		
		$this->middleware('auth')->except(['index','show']);
	}	
	 
    public function index() 
	{
		$posts = Post::latest()
			->filterek(request(['month','year']))
			->get();
		
		$archives = Post::archives();
		
		return view('posts.index', compact('posts'));
	}
	
	public function show(Post $post) 
	{
	    return view('posts.show', compact('post'));
	}
	
	public function create() 
	{
		return view('posts.create');
	}
	
	public function store()
	{
		//dd(request()->all());
		/* first version 
		$post = new Post;
		$post->title = request('title');
		$post->body = request('body');
		$post->save();
		*/
		
		
		//dd(get_class($this)); print current class name
		
		$this->validate(request(), [
		
				'title' => 'required|min:3',
				'body'	=> 'required'
 		]);
		
		Post::create([
			'title'   => request('title'),
			'body'   => request('body'),
			'user_id'   => auth()->id(),
		]);
		
		session()->flash('message','Your post has now been published');
		
		return redirect('/posts');
	}

}
