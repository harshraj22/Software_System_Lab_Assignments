BEGIN{

}
{
	# (n x k) matrix
	# (n x m) and (m1 x k) matrix

	# store all fields in array (mat1) for matrix in first file

	if(NR == FNR){
		mat1[NR] = $0;
		n = NR;
		m = split(mat1[NR], random, " ");
	}
	
	# do the same for the second file

	else{
		mat2[NR - n] = $0;
		m1 = NR - n;
		k = split(mat2[NR - n], random, " ");
	}

}
END{
	if(m1 != m){
		printf("Matrix can't be multiplied. Col of first matrix must be equal to row of second.\n");
		printf("%d x %d and %d x %d, NR = %d\n",n,m,m1,k,NR);
	}
	else{
		# for result matrix:
		#	print each element (calculate at runtime)

		for(row1=1;row1<=n;row1++){
			for(col1=1;col1<=k;col1++){

				# sum represent the element of result matrix at position (row1, col1)
				sum = 0;

				# store row1 row of first matrix in 'row'
				split(mat1[row1], row, " ");

				for(var=1;var<=m;var++){	

					# for each row in 2nd matrix, store it's val at 'col1' index

					split(mat2[var], curVar, " ");
					col[var] = curVar[col1];

					# do the standard matrix multiplication (dot product of row vector and column vector)
					sum += int(col[var])*int(row[var]);
				}

				# print the element at (row1, col1) in result matrix
				printf("%d ",sum);
			}
			printf("\n");
		}
	}
}