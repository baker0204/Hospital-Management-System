function add(div)
{
	var input = document.createElement('input'); 
	var input2 = document.createElement('input'); 
	input.type = "text"; 
	var container = document.getElementById(div);
	container.appendChild(input); 
	container.appendChild(input2); 
	var br = document.createElement('br');
	container.appendChild(br);
}

function clearForm(formID)
{
	document.getElementById(formID).reset();
}