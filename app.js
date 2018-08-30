function validate() {
	var values = document.forms["myForm"];
	for(var key in Object.keys(values)){
		if (values[key].type != 'submit') {
			var value = values[key].value;
			if (isNaN(value)) return false;
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