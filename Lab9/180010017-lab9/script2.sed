

# Insert line number before each line of input
# Pipe to
# Take a pair of lines and join them with space
# Pipe to
# Replace all the starting numbers of line (remember the missing g flag) to bracketed number 1 => (1)

-n '/^/{=;p}' 
'{N;s/\n/ /g}' 
's/^\([0-9]*\)/(\1)/' > output.txt	