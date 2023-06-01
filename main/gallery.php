<?php

$dir = "uploads/";
$image_entry = array();

	
if ($dh = opendir($dir)){
	while (false !== ($entry = readdir($dh))){
		if ($entry != "." && $entry != ".." && !(str_starts_with($entry, "."))){
			$fname = $entry;
			$fdate = date("F d Y", filectime($dir . $entry));
			$image_data = array("FileName" => $fname, "CreationDate" => $fdate, "Path" => ($dir . $entry));
			array_push($image_entry, $image_data);
		}
	}
	closedir($dh);
}

$gallery = array("Gallery" => $image_entry);
file_put_contents("data.json", json_encode($gallery));

?>
