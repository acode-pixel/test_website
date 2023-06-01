<?php

$dir = "uploads/";
$fname = $_GET["delfile"];

if (file_exists($dir . $fname)){
	unlink($dir . $fname);
} 

header("Location: index.php");

?>
