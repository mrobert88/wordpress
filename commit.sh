#!/bin/bash
#echo "Commit at $(date +"%Y-%m-%d %T")"
cd /var/www/html/wordpress

eval $(ssh-agent -s)
#ssh-add 

branch=$(git status | grep "On branch"| cut -d " " -f 4)
echo $branch

git add -A .
git commit -m "Automatic commit at $(date +"%Y-%m-%d %T")"
git push origin $branch
