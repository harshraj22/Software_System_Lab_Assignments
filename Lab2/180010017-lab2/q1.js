function check(){
	var v = document.getElementById("input-id").value;
	var likh_do = document.getElementById("kuch-bhi");
	var num = parseInt(v,10)
	if(!Number.isInteger(num))
		alert("Age Should Be Integer !!")
		// likh_do.innerHTML = "Number daalna hai be !!";
	else if(v<18)
		alert("Not Eligible !")
		// likh_do.innerHTML = "Not eligible !";
	else if(v<100)
		alert("Eligible -")
		// likh_do.innerHTML = "Welcome -";
	else
		alert("You are dead !")
		// likh_do.innerHTML = "You are dead !!";
	return false;
}