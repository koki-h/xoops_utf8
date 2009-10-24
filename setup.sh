#!/bin/sh
#utf8化＆パーミッション変更
find .  -type "f" -name "*.*"  | grep "language/japanese" | xargs ./euc2utf8.sh
chmod 777 uploads/ cache/ templates_c/
chmod 666 mainfile.php


