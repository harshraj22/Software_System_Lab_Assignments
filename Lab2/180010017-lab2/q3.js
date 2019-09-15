function find(){
	num1 = document.getElementById('pehla-number').value;
	num2 = document.getElementById('doosra-number').value;
	num1 = parseInt(num1,10);
	num2 = parseInt(num2,10);
	if(num2<0 || num1<0)
		alert("Abey, isko toh stackoverflow pe hi khoj le !");
	else
		alert("GCD of " + num1 + " and " + num2 + " is " + gcd_two_numbers(num2,num1));
}

function gcd_two_numbers(x, y) {
	if(!y)
		return x;
	return gcd_two_numbers(y,x%y);
}