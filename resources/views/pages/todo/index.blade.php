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