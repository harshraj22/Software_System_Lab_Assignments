BEGIN {
	printf("Number of devices on full capacity:\n");

	# Initialise variable to 0 (stores the count of devices)
	numOfDevices=0;
}
{
	# NR != 1 : Escape first line
	# Extract number from first field by :
	# first removing the '%' sign
	# then type cast into integer

	if (NR != 1 && substr($5,0,length($5)-1) + 0 == 100){
		numOfDevices += 1;
		printf("%s\n",$1);
	}
}
END{
	printf("TOTAL: %d devices\n",numOfDevices);
}