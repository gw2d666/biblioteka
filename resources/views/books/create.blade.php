@extends('layout')


@section('content')
	<h2>Create a Book</h2>
	<form method="POST" action="create">
		<label>Title</label>
		<input type="text" name="title">
		<input type="submit" value="Add Book">
		{{ csrf_field() }}
	</form>

	@if(count($errors))
		<h2>Errors:</h2>
	    <ul>
	        @foreach($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif

@stop