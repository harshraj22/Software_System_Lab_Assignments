# echo $1
# echo $2
# var={ls -R | sed -ne '/txt/p' }
echo $var
find . *.txt | sed -ne '/txt/p' > newfile

for file in ```cat newfile```
do 
	# echo $file
	sed -i "s/$1/$2/g" $file
	# echo ```cat $file```
done

# for file in *.txt
# do
# 	# random $file | sed
# 	sed -i "s/$1/$2/g" $file
# 	# echo $file
# 	# echo "s/$1/$1/g"
# 	# sed '' $file
# 	# echo "$1"

# done


