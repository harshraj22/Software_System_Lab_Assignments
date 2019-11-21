
# Replace 1 or more continious whitespace characters with a single space 
# Pipe to
# Replace all lines starting with whitespace characters and ending with it, to a _
# Pipe to
# Delete all lines that contains only _

s/\s\+/ /g 
s/^\s*$/_/g 
/^_$/d