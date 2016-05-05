import os
fname = "student_list.txt"
with open(fname) as f:
	folders = [line.replace(" ","") for line in f.read().splitlines()]
	print folders
	for folder in folders:
		os.mkdir(folder)
		fo = open(folder+"/.gitignore","wb");
		fo.close
