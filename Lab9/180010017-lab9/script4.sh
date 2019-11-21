#!/bin/bash

# match all Capital English alphabets and replace them preceeded by a tab.
# pipe the output to
# match any digit that occurs for the first time (note g flag is not there) and replace it preceeded by a tab
# pipe to
# match any line that starts with a tab and remove the tab
# pipe to 
# match any number of continious whitespace characters and replace them with a tab

sed 's/\([A-Z]\)/\t\1/g' input.txt | sed 's/\([0-9]\)/\t\1/' | sed 's/^\t//g' | sed 's/\s\+/\t/g'
