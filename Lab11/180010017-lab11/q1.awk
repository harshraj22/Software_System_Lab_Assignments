BEGIN{
	
}
{
	# store each line in array,
	arr[NR] = $0;

	# as the number of columns is same for each line, n is same always (n is number of columns)
	n = split($0, a, " ");
}
END{
	# for each column in the matrix
	for(j=1;j<=n;j++){

		# for each row in the matrix
		for(i=1;i<=FNR;i++){

			# print the splitted column, i.e. integer at given column in each row seperated by a space(' ')
			split(arr[i], st, " ");
			printf("%s ",st[j]);
		}
		printf("\n");
	}
}