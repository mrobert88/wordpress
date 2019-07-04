#!/bin/bash
#echo "Commit at $(date +"%Y-%m-%d %T")"
cd /var/www/html/wordpress

branch=$(git status | grep "On branch"| cut -d " " -f 4)
echo $branch

git add .
git commit -m "Automatic commit at $(date +"%Y-%m-%d %T")"
git push origin $branch