@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h1 class="page-title">My Student List</h1>

</div>

<div class="col-lg-12">
    <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
        @csrf
        
<div class="form-group">

<input class="form-control" name="fullname" type="text" placeholder="Name" aria-label="default input example">
<input class="form-control" name="image" type="text" placeholder="image" aria-label="default input example">
<input class="form-control" name="age" type="text" placeholder="Age" aria-label="default input example">
<input class="form-control" name="done" type="text" placeholder="Age" aria-label="default input example">


</div>
<Button type ="submit" class="btn btn-success">Submit</Button>
</form>


</div>

<div class="col-lg-12">

<br><br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($tasks as $key=> $task)
    <tr>
      
      <td>{{++$key}}</td>
      <td>{{$task->name}}</td>
      <td>{{$task->age}}</td>
      <td>{{$task->image}}</td>
      <td>

      @if($task->done==0)
      <span class="badge bg-warning">Not completed</span>
      @else
      <span class="badge bg-success">Completed</span>
      @endif
      </td>
      <td>
        <a href="{{route('todo.delete',$task->id)}}">Delete</a>
        <a href="{{route('todo.done',$task->id)}}">Update</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>






</div>


</div>


@endsection


@push('css')
<style>
.page-title{
    padding : 5vh;
    font-size: 5rem;
    color:#4fbf4b;

}

</style>
@endpush