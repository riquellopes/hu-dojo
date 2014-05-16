echo $(date) - $1 e $2 >> dojo.log
git add .
git commit -am "$1 e $2"

sleep $3 && play ../../sound.mp3
