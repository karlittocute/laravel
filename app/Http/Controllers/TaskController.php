<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Task;

class TaskController extends Controller
{
    public function index(){
		return view('tasks_index');
	}
	
	public function show($id){
		return view('tasks_show', ['task' => Task::findOrFail($id)]);
	}
	
	public function create(){
		return view('tasks_create');
	}
	
	public function store(Request $request){
		if (empty($request->id)){
			$task= new Task;
			$task->name=$request->name;
			$task->description=$request->description;
			$task->importance=$request->importance;
			$task->save();
			$id=$task->id;
			
			return view('tasks_show', ['task' => Task::findOrFail($id)]);
		}
		else {
			$task = Task::findOrFail($request->id);
			$task->name=$request->name;
			$task->description=$request->description;
			$task->importance=$request->importance;
			$task->save();
			return view('tasks_show', ['task' => Task::findOrFail($request->id)]);
		}

	}
	public function edit($id){
		return view('tasks_edit', ['task' => Task::findOrFail($id)]);
	}
	
	public function author(){
		return view('tasks_author');
	}
}
