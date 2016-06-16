@extends('layouts.app')
@section('title')
Show task
@endsection
@section('content')
<?php

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;
echo "Name: " . $task->name . " </br>Description: " . $task->description . " </br>Importance: " . $task->importance . "</br>";
?>

<a class="btn btn-default" href="/task/<?php echo $task->id?>/edit" role="button">Edit</a>
@endsection