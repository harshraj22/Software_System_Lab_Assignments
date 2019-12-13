BEGIN{
	s = "I II III IV V VI VII VIII IX X";

	# store the correspondin values of 1-10 in roman
	n = split(s, arr, " ");

	# take any random variable to be used as input. When this random variable becomes equal to 'q', exit the programme
	cur = "a";

	# an infinite loop, exit when our random variable becomes 'q'
	for(i=1; ; ){

		# read from stdin into random variable 'cur'
		getline cur < "-";
		# cur = $0;

		# if our random variabel is 'q', exit 
		if(cur == "q")
			exit 0;
		
		# else if the current random variable has already been given as input, print the asked output
		else if(arr[int(cur)] == 0)
			printf("Given previously.\n");

		# else print its roman value, and mark it as already asked
		else{
			printf("%s\n",arr[int(cur)]);
			arr[int(cur)] = 0;
		}
	}
}
{

}
END{
	
}