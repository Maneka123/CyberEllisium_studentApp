<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task=new Todo();
    }

    public function index(){
        $response['tasks']=$this->task->all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request){
        $this->task->create($request->all());

       //$this->task->fullname=$request->name;
       // $this->task->age=$request->age;
        //$this->task->image=$request->image;
        //$this->task->name=$request->age;
        return redirect()->back();
}

public function delete($task_id){

    $task=$this->task->find($task_id);
    $task->delete();
    return redirect()->back();

}

public function done($task_id){

    $task=$this->task->find($task_id);
    $task->done =1;
    $task->update();
    return redirect()->back();

}

}
