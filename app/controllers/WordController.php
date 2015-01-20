<?php

class WordController extends \BaseController {
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$word = Input::get('word');
		$conn = new mysqli("localhost", "root", "", "dictionary") or die("Connection failed: " . $conn->connect_error);
		$sql = "SELECT definition FROM words WHERE word='" . $word ."'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		echo $row['definition'];
	}
}
