<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class TasksController extends Controller
{
    public function index(){
    	$tasks = App\Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){ //Task::find(wildcard)
    	//$task = App\Task::find($id);
    	return view('tasks.show', compact('task'));
    }
}
