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
	var values = document.forms["myForm"];
	for(var key in Object.keys(values)){
		if (values[key].type != 'submit') {
			var value = values[key].value;
			if (isNaN(value)) {
				on(key, value, 0);
				setTimeout(off, 1400);
				return false;
			}
			if (key == 'y') {
				if (value < -3 || value > 3) {
					on('y', value, 1);
					setTimeout(off, 1400);
					return false;
				}
			}
			if (key == 'x') {
				if (![-3, -2, -1, 0, 1, 2, 3, 4, 5].includes(parseInt(value, 10))) {
					on('x', value, 1);
					setTimeout(off, 1400);
					return false;
				}
			}
			if (key == 'r') {
				if (![1, 1.5, 2, 2.5, 3].includes(parseFloat(value, 10))) {
					on('r', parseFloat(value, 10), 1);
					setTimeout(off, 1400);
					return false;
				}
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
  		.then(htmlTable => document.querySelector('#res').insertAdjacentHTML('beforeend', htmlTable));
	}
	return false;
}
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('ok').addEventListener('click', submit);
});