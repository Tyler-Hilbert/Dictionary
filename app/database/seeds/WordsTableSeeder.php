<?php

class WordsTableSeeder extends Seeder
{
	public function run()
	{
		//TODO: Delete current records

		$file = "dictionary.data";
		$fh = fopen($file, 'r');
		$dictionary = fread($fh, filesize($file));
		fclose($fh);

		$conn = new mysqli("localhost", "root", "", "dictionary") or die("Connection failed: " . $conn->connect_error);
		$words = explode ('","', $dictionary);
		for ($i = 0; $i < count($words); $i++) {
			set_time_limit(100);

			$wordString = explode ('":"', $words[$i]);
			$word = $wordString[0];

			if (count($wordString) > 1) {
				$def = $wordString[1];
				$sql = "INSERT INTO words (word, definition) VALUES ('" . $word . "', '" . $def . "')";
				$conn->query($sql);
			}
		}
		$conn->close();
	}
}