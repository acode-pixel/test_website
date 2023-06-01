const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {json2table(this.responseText)};
xmlhttp.open("GET", "data.json");
xmlhttp.send();

function json2table(jsondata){
	var gallery = JSON.parse(jsondata);
	var code = '<table><tr><th>Image Name</th><th>Date Uploaded</th><th colspan="2">Image</th></tr>'
	for (var x = 0; x <= (gallery.Gallery.length - 1); x++){
		var fname = gallery.Gallery[x].FileName;
		var fdate = gallery.Gallery[x].CreationDate;
		var fimage = gallery.Gallery[x].Path;
		code = code.concat(
					"<tr><td>", fname, "</td>",
					"<td>", fdate, "</td>",
					"<td><img src=", fimage, ' width="500" height="300"></td>',
					'<td><form action="delete.php" method="get" id="del"><input type="hidden" id="delfile" name="delfile" value=', fname, '></form>',
					'<button type="submit" form="del">Delete</button> </td></tr>'
				); 
	}	
	code = code.concat("</table>");
	var table = document.getElementById("gallery");
	table.innerHTML = code;
	console.log(code);
}
