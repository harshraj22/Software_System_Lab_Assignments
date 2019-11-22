BEGIN {
	printf("File System|Available Storage|Used|Percentage\n");
}
{
	# NR > 1 : Leave first line
	# substr cuts substring to remove '%' sign
	# for comparison, we need to type cast string (returned by substr) to integer

	if ( NR > 1 && substr($5,1,length($5)-1	) + 0 > 30 ) { 
		printf("%s|%d|%d|%s\n",$1,$2,$3,$5);
	}
}
END{
	# Nothing required for now
}