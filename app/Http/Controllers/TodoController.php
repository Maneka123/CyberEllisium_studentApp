<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use domain\Facades\TodoFacade;
class TodoController extends ParentController
{
   
   // protected $task;
    public function index(){
        $response['tasks']=TodoFacade::all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request){

            TodoFacade::store($request->all());
       // $this->task->create($request->all());
        return redirect()->back();
       //$this->task->fullname=$request->name;
       // $this->task->age=$request->age;
        //$this->task->image=$request->image;
        //$this->task->name=$request->age;
        
}

public function delete($task_id){

    //$task=$this->task->find($task_id);
    //$task->delete();
    TodoFacade::delete($task_id);
    return redirect()->back();

}

public function done($task_id){

   // $task=$this->task->find($task_id);
    //$task->done =1;
    //$task->update();
    TodoFacade::done($task_id);
    return redirect()->back();

}

}
