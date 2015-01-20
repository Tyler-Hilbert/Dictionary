<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('search');
});

Route::post('word', 'WordController@store');

Route::post('/search', array('before'=>'csrf','uses'=>function()
{
		$word = Input::get('word');
		$conn = new mysqli("localhost", "root", "", "dictionary") or die("Connection failed: " . $conn->connect_error);
		$sql = "SELECT definition FROM words WHERE word='" . $word ."'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		return $row['definition'];
}));



