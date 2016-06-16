@extends('layouts.app')
@section('title')
Store task
@endsection
@section('content')
<?php

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;



	echo "New Task! </br> Name: " . $task->name . " </br>Description: " . $task->description . " </br>Importance: " . $task->importance ;
?>
@endsection