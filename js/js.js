function add(div, divCounter)
{
	var container = document.getElementById(div);
	var childNum = div.childElementCount();
	var divName = div.id;
	
	var input = document.createElement('input'); 
	var input2 = document.createElement('input'); 
	
	input.type = "text"; 
	input2.type = "text"; 
	
	input.id = divName . "1" . childNum;
	input1.id = divName . "2" . childNum;
	
	container.appendChild(input); 
	container.appendChild(input2); 
	
	var br = document.createElement('br');
	container.appendChild(br);
	
	childNum = div.childElementCount();
	var counter = document.getElementById(divCounter);
	var counter.innerHTML = childNum
}

function remove(div)
{
	var container = document.getElementById(div);
	container.removeChild(container.lastChild);
	container.removeChild(container.lastChild);
	container.removeChild(container.lastChild);
	
	var childNum = div.childElementCount();
	var counter = document.getElementById(divCounter);
	var counter.innerHTML = childNum
}

function clearForm(formID)
{
	document.getElementById(formID).reset();
}