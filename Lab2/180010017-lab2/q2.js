function check(){
	var st = document.getElementById('apna-id').value;
	var new_st = st;
	st = st.split('').reverse().join('');
	wt = document.getElementById('answer');
/*
	wt = document.getElementById().innerHTML doesn't work, so use
	wt = document.getElementById()
*/
	if(st.length == 0)
		wt.innerHTML = "Abey, string toh daal !!";
	else if(st == new_st)
		wt.innerHTML = "Yes ! You found a Palindrome !";
	else
		wt.innerHTML = "Thoda aur try kar le ..";
	return true;
}