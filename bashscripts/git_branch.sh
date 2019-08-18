git branch --set-upstream-to=origin/master master
git submodule foreach git branch --set-upstream-to=origin/master master
git push --set-upstream origin master
git submodule foreach git push --set-upstream origin master
read -p "Press [Enter] key to exit..."
