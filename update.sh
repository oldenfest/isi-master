#/bin/bash

git add --all
git commit -m "Hehu"
git push
ssh-add
ssh moar.se "cd /var/www/isi ; git pull"
