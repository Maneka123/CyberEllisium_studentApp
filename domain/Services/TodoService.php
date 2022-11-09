<?php

namespace domain\Services;

use App\Models\Todo;

class TodoService{

    protected $task;

   public function __construct(){
        $this->task=new Todo();
    }


    //function to get all tasks
    public function all(){
        return $this->task->all();
       //$response['tasks']=$this->task->all();
        //return view('pages.todo.index')->with($response);
    }

    public function store($data){
        $this->task->create($data);

       //$this->task->fullname=$request->name;
       // $this->task->age=$request->age;
        //$this->task->image=$request->image;
        //$this->task->name=$request->age;
       //return redirect()->back();
}

public function delete($task_id){

    $task=$this->task->find($task_id);
    $task->delete();
    //return redirect()->back();

}

public function done($task_id){

    $task=$this->task->find($task_id);
    $task->done =1;
    $task->update();
    //return redirect()->back();

}


}