#!/bin/sh
#echo "Commit at $(date +"%Y-%m-%d %T")"
cd /var/www/html/wordpress
git add .
git commit -m "Automatic commit at $(date +"%Y-%m-%d %T")"
git push origin master