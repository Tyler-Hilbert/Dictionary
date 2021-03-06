@extends('layout')
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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

	<div class="container">
		<div>
			<h1>Ajax dictionary</h1>
		</div>
		<div class="col-md-6">
			<div class="well well-sm">
				<div class="form-group">
					<input id="word" type="text" class="form-control input-lg">
				</div>
				<div class="form-group">
					<button id="search" type="button" onClick='search()' class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div> 
	</div>

	<div class="container" id="definition">
	</div>
@section('content')
@stop