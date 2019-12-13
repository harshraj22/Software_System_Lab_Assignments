BEGIN {FS="\t"}
pop[$4]+=$3
END{ for (i in pop)
	print "Population of "i" is:"pop[i]
}
