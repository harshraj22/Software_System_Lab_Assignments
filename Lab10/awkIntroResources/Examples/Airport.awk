BEGIN {FS=",";numAirports=0;printf("From\tTo\tDistance\tComments\n");}
$3<500 {numAirports++;print "HBX\t"$1"\t"$3"\tHubballi-"$2"\n"}
END {print "NumAirports: ",numAirports}

