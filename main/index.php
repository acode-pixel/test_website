<?php
include "gallery.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="main.css">
	</head>

	<body id="main">
		<div id="navbar">
			<h1 class="nav-title">Image Viewer</h1>
			<h2 class="nav-title">Made in html, css and js</h2>	
		</div>
		<center>
			<div id="display-window">
				<div id="display-content">
					<h3 id="display-title">Add Image</h3>
					<form id="Form" action="upload.php" method="post" enctype="multipart/form-data">
						<input type="file" id="File" name="File"><br>
						<label for="fname">File Name: </label>
						<input type="text" id="fname" name="fname" required><br>
						<input type="submit" name="submit">
					</form>	
				</div>
			</div>
			<div id="gallery">
				<table>
					<tr>
						<th>Image Name</th>
						<th>Date Uploaded</th>
						<th>Image</th>
					</tr>
				</table>
			</div>
		</center>

		<script src="main.js"></script>
		<script src="gallery.js"></script>
	</body>
</html>
