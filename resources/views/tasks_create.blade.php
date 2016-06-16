@extends('layouts.app')
@section('title')
Add task
@endsection
@section('content')

<h1>Task add form</h1>
<form method="POST" action="/task">
	<div class="form-group">
	<label>Name</label><input  class="form-control"  name="name" id="name"></br>
	</div>
	<label>Description</label><input class="form-control"  name="description" id ="description" type="textarea"></br>
	<label>Importance</label><input class="form-control"  name="importance" id="importance" type="number"></br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button class="btn btn-default" type="submit">Add task</button>
	
</form>


@endsection