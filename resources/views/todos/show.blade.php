@extends('layouts.app')

@section('content')
	<a class="btn btn-default" href="/">Go Back</a>
	<h1>
		<a href="todo/{{$todo->id}}"> {{$todo->text}} </a>
	</h1>
	<div class="lable lable-danger">
			{{$todo->due}}
	</div>
	<hr>
	<p>{{$todo->body}}</p>
	<br>
	<br>
	<a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
	<br>
	{!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'pull-right']) !!}
		{{ Form::hidden('_method','DELETE') }} 
    	{{ Form::bsSubmit('Delete', ['class' => 'btn btn-Danger']) }}
	{!! Form::close() !!}
@endsection