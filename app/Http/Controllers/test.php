<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; 

class PostsController extends Controller
{
    public function footester() 
    {
        $name = 'Jon';
        echo $name;

        return 23588888;
    }

}