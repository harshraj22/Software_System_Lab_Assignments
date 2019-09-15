function print(){
	num = document.getElementById('ek-id').value;
	num = parseInt(num,10);
	var ar = new Array(num)
	wt = document.getElementById('write')
	ar[0]=0,ar[1]=1;
	wt.innerHTML = "The "+num+" fibonacci number(s) is/are :\n";

	if(num==1)
		wt.innerHTML += ar[0];
	else if(num>1)
		wt.innerHTML += ar[0]+"\n"+ar[1]+"\n";
	for(i=2;i<num;i++){
		ar[i]=ar[i-1]+ar[i-2];
		wt.innerHTML += ar[i]+"\n";
	}
}