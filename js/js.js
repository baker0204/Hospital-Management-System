function add(div, divCounter)
{
	var container = document.getElementById(div);
	var childNum = container.childElementCount;
	var divName = container.id;
	
	var input = document.createElement('input'); 
	var input2 = document.createElement('input'); 
	
	input.type = "text"; 
	input2.type = "text"; 
	
	input.id = divName.concat("1", childNum);
	input2.id = divName.concat("2", childNum);
	
	container.appendChild(input); 
	container.appendChild(input2); 
	
	var br = document.createElement('br');
	container.appendChild(br);
	
	var counter = document.getElementById(divCounter);
	counter.value = container.childElementCount;
}

function remove(div)
{
	var container = document.getElementById(div);
	container.removeChild(container.lastChild);
	container.removeChild(container.lastChild);
	container.removeChild(container.lastChild);
}

function clearForm(formID)
{
	document.getElementById(formID).reset();
}

function preload(gender)
{
	var mySelect = document.getElementById("patientSex");
	for(var i, j = 0; i = mySelect.options[j]; j++) {
		if(i.value == gender) {
			mySelect.selectedIndex = j;
			break;
		}
	}
}