#!/bin/bash
#引数に受けとったファイルをeucからutd8に変換する
if [ $# = 0 ]
then
	echo "usage: utf8 filename"
	exit 1
fi

for file in "$@"
do
	if [ -f $file ]
	then
    echo "$file"
		mv $file ${file}.bak
		nkf -wLU ${file}.bak > $file
		rm ${file}.bak
	else
		echo "$file: No such file"
	fi
done
