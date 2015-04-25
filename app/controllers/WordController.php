<?php

class WordController extends \BaseController {
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function show()
	{
		$word = strtoupper(Input::get('word'));
		$def = DB::table('words')->where('word', $word)->first();
		return $def->definition;
	}
}
