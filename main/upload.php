<?php

$file = $_FILES["File"]["tmp_name"];
$white = ["jpg", "jpeg", "png"];
$upload_err = false;
$upload_dir = "uploads/";
$dh = opendir($upload_dir);

function filter($str1) {
	global $dh, $upload_err;
	if (!str_contains($str1, '../')){
		while (false !== ($entry = readdir($dh))){
			if ($entry != "." && $entry != ".." && !(str_starts_with($entry, "."))){			
				if ($entry == $str1){
					$upload_err = true;
					break;
				}
			}
		}
	}
}

function checkError(){
	global $upload_err, $file;
	if ($upload_err){
		echo "An Error occured while uploading<br>";
		echo "$file<br>";
		var_dump($_FILES);
		exit;	
	}
}


filter($_POST["fname"]);
checkError();

$a = explode(".", $_FILES["File"]["name"]);
$ext = $a[count($a) - 1];
for ($x = 0; $x <= (count($white) - 1); $x++){
	if ($white[$x] == $ext){
		$upload_err = !(move_uploaded_file($file, $upload_dir . $_POST["fname"]));
		break;
	}
}

checkError();

header("Location: index.php");
?>
