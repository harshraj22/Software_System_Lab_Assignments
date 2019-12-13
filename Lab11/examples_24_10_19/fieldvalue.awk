BEGIN {FS="\t"}
{ 
if ($3 > 100)
	 print $0
}
