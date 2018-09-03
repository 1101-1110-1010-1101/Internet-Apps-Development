function on(key, value, code) {
	if (code == 0) {
		document.querySelector("#overlay > h1").innerHTML += "<br>'" + value + "' is not a number, Anon...</br>"
	}
	else {
		if (key == 'x') {
			document.querySelector("#overlay > h1").innerHTML += "<br>x must be in {-3, -2, -1, 0, 1, 2, 3, 4, 5}, Anon..."
		}
		if (key == 'y') {
			document.querySelector("#overlay > h1").innerHTML += "<br>y must be in {-3...3}, Anon...";
		}
		if (key == 'r') {
			document.querySelector("#overlay > h1").innerHTML += "<br>r must be in {1, 1.5, 2, 2.5, 3}, Anon...";
		}
	}
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
    document.querySelector("#overlay > h1").innerHTML = 'Wrong...';
}

function validate() {
	var y = document.querySelector("input[name=y]").value.replace(/,/g, '.');
	var x = document.querySelector("select[name=x]").value;
	var r = document.querySelector("select[name=r]").value;
	var values = [x, y, r];
	for(var i = 0; i < 3; i++) {
	var val = values[i];
		if (isNaN(val)) {
			on(i, val, 0);
			setTimeout(off, 1400);
			return false;
		}
		if (i == 1) {
			if (val < -3 || val > 3) {
				on('y', val, 1);
				setTimeout(off, 1400);
				return false;
			}
		}
		if (i == 0) {
			if (![-3, -2, -1, 0, 1, 2, 3, 4, 5].includes(parseInt(val, 10))) {
				on('x', val, 1);
				setTimeout(off, 1400);
				return false;
			}
		}
		if (i == 2) {
			if (![1, 1.5, 2, 2.5, 3].includes(parseFloat(val, 10))) {
				on('r', parseFloat(val, 10), 1);
				setTimeout(off, 1400);
				return false;
			}
		}
	}
	return true;	
}

function submit(e) {
	e.preventDefault();
	if (validate()) {
		const formData = new FormData(document.querySelector('#mainForm'));
		fetch('result.php', {
    		method: 'POST',
    		body: formData
  		})
  		.then(response => response.text())
  		.then(htmlTable => document.querySelector('#res').innerHTML = htmlTable);
	}
	return false;
}
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('ok').addEventListener('click', submit);
});