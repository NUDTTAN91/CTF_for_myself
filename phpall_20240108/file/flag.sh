#!/bin/bash

min_length=6
max_length=10

password_length=$((RANDOM % (max_length - min_length + 1) + min_length))

characters="abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"

password=""
i=0
while [ $i -lt $password_length ]; do
  random_index=$((RANDOM % ${#characters}))
  random_char=$(expr substr "$characters" $((random_index + 1)) 1)
  password="$password$random_char"
  i=$((i + 1))
done

filename="${password}.php"

touch /var/www/html/$filename

echo "<?php flag=flag_here ?>" > /var/www/html/$filename

sed -i "s/flag_here/$FLAG/" /var/www/html/$filename

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh

