@extends('layout')
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	
	<div class="container">
		{{ Form::open(array('action' => 'WordController@store')) }}
			{{ Form::label('Enter word:') }}
			{{ Form::text('word') }}
			{{ Form::submit('Enter') }}
		{{ Form::close() }}
	</div>
@section('content')

@stop