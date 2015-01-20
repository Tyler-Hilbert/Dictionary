@extends('layout')
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/search.js"></script>

		{{ Form::open(array('id' => 'form-search') ) }}
		{{ Form::label('Enter word:') }}
		{{ Form::text('word', '', array('id'=>'word')) }}
		{{ Form::submit('Enter') }}
	{{ Form::close() }}
@section('content')
@stop