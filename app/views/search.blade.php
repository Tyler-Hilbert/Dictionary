@extends('layout')
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/search.js"></script>
	<script>
		function search() {
			var word = document.getElementById('word').value;
	        $.ajax({
				url: "search",
				data: {word:word}, 
				method: "POST"
			}).done(function(response) {
				$("#definition").html(response);
			});
		}

		$(document).keydown(function(e) {
			var key = e.which;
			if(key == 13) {
				search();
			 }
		});   
	</script>

	<input id="word" type="text">
	<button id="search" type="button" onClick='search()'>Submit</button>

	<div id="definition"></div>
@section('content')
@stop