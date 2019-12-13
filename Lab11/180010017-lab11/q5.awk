BEGIN{
	outputFile = "q5.txt";

	# all characters other than alphaNumeric characters are to be considered as punctuation mark

	s = "a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 1 2 3 4 5 6 7 8 9 0";

	n = split(s, alphabets, " ");
}
{
	m = split($0, curLine, " ");
	printf($0) > outputFile;

	# for each word in the current line
	for(i=1;i<=m;i++){
		characters = 0;

		split(curLine[i], curWord, "");

		# for each character in current word
		for(c=1;c<=length(curWord);c++){
		
			# each alphanumeric char
			for(j=1;j<=n;j++){

				# if the current character in the current word is an alphanumeric char
				# if it is so, increase the count of characters
				if(alphabets[j] == curWord[c])
					characters += 1;
			}
		}

		printf(" %d",characters) > outputFile;
	}

	printf("\n") > outputFile;

}
END{
	
}