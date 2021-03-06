@extends('layouts.app')

@section('content')
	<a href="/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
	<h1>Edit Todo</h1>
	{!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'POST']) !!}
		{{ Form::hidden('_method','PUT') }} 
    	{{ Form::bsText('text', $todo->text) }}

    	{{ Form::bsText('due', $todo->due) }}
    	{{ Form::bsTextArea('body', $todo->body) }}
    	
    	{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endSection