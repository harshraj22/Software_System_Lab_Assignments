BEGIN{
	roll="tty8"
	i=1;
	j=0;
}
{
	if($1=="user" && $2==roll){
			#printf("%d %d\n",$i,$j);
		j=1;
		arr[i]=$0;
		i=NR;
	}

}
END{
	if(j==1){
		split(arr[1], det, " ");
		printf("User %s last logged in on %s %s %s\n",roll,det[4],det[5],det[6]);
		printf("Sessioin lasted from %s to %s\n",det[7],det[9]);
	}
	else{
		printf("User %s did not log in.\n",roll);
	}
}