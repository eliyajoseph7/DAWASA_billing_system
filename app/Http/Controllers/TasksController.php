<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
 /**
 * Display All Tasks
 */
    public function display(){
        $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
    }
 /**
 * Add A New Task
 */
public function add(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/tasks')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/tasks');

}
/**
 * Delete An Existing Task
 */
public function delete($id){
    Task::findOrFail($id)->delete();

    return redirect('/tasks');

}
  
}
