@extends('layouts.app')
@section('title')
Edit task
@endsection
@section('content')
<?php

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

?>
<h1>Task edit form</h1>
<form method="POST" action="/task">
	<div class="form-group">
	<label>Name</label><input  class="form-control"  name="name" id="name" value="<?php echo $task->name?>"></br>
	</div>
	<label>Description</label><input class="form-control"  name="description" id ="description" type="textarea" value="<?php echo $task->description?>"></br>
	<label>Importance</label><input class="form-control"  name="importance" id="importance" type="number" value="<?php echo $task->importance?>"></br>
	<input type="hidden" name="edit" value="1">
	<input type="hidden" name="id" value="<?php echo $task->id?>">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button class="btn btn-default" type="submit">Edit task</button>
	
</form>


@endsection