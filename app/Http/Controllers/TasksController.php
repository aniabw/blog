<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
	{
		$tasks = Task::all();
		//$tasks = Task::latest()->get();
        
		return view('tasks.index', compact('tasks'));
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
