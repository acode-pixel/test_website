function hover() {
	const dc = document.getElementById("display-content");
	let size = getComputedStyle(dc).fontSize;
	size = size.slice(0, 2);
	console.log("Size: " + size);	
	let interval = setInterval(grow, 1);
	function grow() {
		if (size >= 50) {
			dc.style = "font: 50px GoodTimes";
			clearInterval(interval);
		} else {
			size++;
			dc.style = "font: " + size + "px GoodTimes";
		}
	}
}

function exit() {
	const dc = document.getElementById("display-content");
	let size = getComputedStyle(dc).fontSize;
	size = size.slice(0, 2);
	let interval = setInterval(degrow, 1);
	function degrow() {
		if (size <= 35) {
			dc.style = "font: 35px GoodTimes";
			clearInterval(interval);
		} else {
			size--;
			dc.style = "font: " + size + "px GoodTimes";
		}
	}				
}


