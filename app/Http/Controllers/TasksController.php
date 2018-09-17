<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Task;

class TasksController extends Controller
{
    public function index()
	{
		$tasks = Task::all();
		//$tasks = Task::latest()->get();
        
		return view('tasks.index', compact('tasks'));
	}


	/****************************/

	public function getBody()
	{
	
		$title = "HDTuto.com";
	
		$view = view("tasks.ajaxView",compact('title'))->render();
	
		return response()->json(['html'=>$view]);
	
	}

	public function ajaxresponses()
	{
		/*
		$tasks = 'taskk';
        echo "hell";
		return view('tasks.ajax', ['name' => 'Ania']);
        */
		

		$msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
		
       
	}

	/*
	public function show($id)
	{
		$task = Task::find($id);
   
		return view('tasks.show', compact('task'));
	}
	*///Task $task
	public function show(Task $task)
	{
		//$task = Task::find($id); //usuniemy to i zamisast tego -> show(Task $taks) 
       
		return view('tasks.show', compact('task'));
	}/**/
	/*****************************************/
	
}
