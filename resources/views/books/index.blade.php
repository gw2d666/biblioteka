@extends('layout')


@section('content')

	<h1>Titles:</h1>

	@if(count($books))
		<ul class="titles">
		@foreach($books as $book)
			<li>

				<?php

					if (strlen($book->title) > 10)
					{
						echo substr($book->title, 0, 10) . "...";
					} else {
						echo $book->title;
					}

				?>

				
				<a href="{{ $book->id }}/delete" class="pull-right">Delete</a>
				<a href="{{ $book->id }}/edit" class="pull-right">Edit</a>
			</li>
		@endforeach
		</ul>
	@else
		<p>There are no books.</p>
	@endif

	<a href="create">Add New Book</a>


@stop