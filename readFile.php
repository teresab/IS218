<?php
function readCSV($csvFile){
	$file_handle= fopen($csvFile, 'r');
	while (!feof ($file_handle)) {
		$line_of_text[] = fgetcsv($file_handle, 1024);

	
	}


}
